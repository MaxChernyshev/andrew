<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\ThemeController;
use App\Http\Livewire\Admin\Theme;
use App\Http\Livewire\Admin\Subject;
use App\Http\Livewire\Admin\Question;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Front\SubjectController as FrontSubject;


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

    Route::get('/faq/{slug}', [FrontSubject::class, 'show'])->name('theme.question');

    Route::prefix('/contact')->name('contact.')->group(function ()
    {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::post('/', [ContactController::class, 'store'])->name('store');
    });
//    Route::get('/faq', function (){
//        return view('front.faq');
//    });
});


// Admin
Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin')
    ->group(function ()
    {
        Route::get('/', [AdminPanelController::class, 'index'])->name('panel');

        Route::get('/themes', Theme::class)->name('themes');

        Route::get('/subjects', Subject::class)->name('subjects');
        Route::get('/subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
        Route::post('/subjects/store', [SubjectController::class, 'store'])->name('subjects.store');
        Route::get('/subjects/edit/{subject:id}', [SubjectController::class, 'edit'])->name('subjects.edit');
        Route::put('/subjects/update/{subject:id}', [SubjectController::class, 'update'])->name('subjects.update');
        Route::delete('/subjects/delete/{subject:id}', [SubjectController::class, 'destroy'])->name('subjects.delete');
        Route::get('/questions', Question::class)->name('questions');
    }
    );



