<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Livewire\Admin\Subjects;
use App\Http\Livewire\Admin\Questions;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Front\SubjectController as FrontSubject;
use App\Http\Controllers\Front\QuestionController as FrontQuestion;


Route::get('/dashboard', function ()
{
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Front

Route::localizedGroup(function ()
{
    Route::get('/', [MainController::class, 'index'])->name('main.page');

    Route::get('/faq', [FrontSubject::class, 'index'])->name('faq');

    Route::get('/faq/{subject:slug}', [FrontSubject::class, 'show'])->name('faq.show.subject');

//    Route::get('/faq/{subject:slug}', [FrontQuestion::class, 'show'])->name('faq.show.subject');
//    Route::get('/faq/{subject:slug}/{question:slug}', [FrontQuestion::class, 'show'])->name('faq.show');


//    Route::prefix('/contact')->name('contact.')->group(function ()
//    {
//        Route::get('/', [ContactController::class, 'index'])->name('index');
//        Route::post('/', [ContactController::class, 'store'])->name('store');
//    });
});


// Admin
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function ()
{
    Route::get('/', [AdminPanelController::class, 'index'])->name('panel');

    Route::get('/subjects', Subjects::class)->name('subjects');
    Route::get('/subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
    Route::post('/subjects/store', [SubjectController::class, 'store'])->name('subjects.store');
    Route::get('/subjects/edit/{subject:id}', [SubjectController::class, 'edit'])->name('subjects.edit');
    Route::put('/subjects/update/{subject:id}', [SubjectController::class, 'update'])->name('subjects.update');
    Route::delete('/subjects/delete/{subject:id}', [SubjectController::class, 'destroy'])->name('subjects.delete');

    Route::get('/questions', Questions::class)->name('questions');
    Route::get('/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/questions/store', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('/questions/edit/{question:id}', [QuestionController::class, 'edit'])->name('questions.edit');
    Route::put('/questions/update/{question:id}', [QuestionController::class, 'update'])->name('questions.update');
    Route::delete('/questions/delete/{question:id}', [QuestionController::class, 'destroy'])->name('questions.delete');
}
);



