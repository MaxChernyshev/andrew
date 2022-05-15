<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\ThemeController;
use App\Http\Livewire\Admin\Theme;
use App\Http\Livewire\Admin\Question;


//use App\Http\Livewire\Admin\Theme as ThemeL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function ()
{
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Front

Route::localizedGroup(function ()
{
    Route::get('/', [MainController::class, 'index'])->name('main.page');
    Route::get('/themes', [ThemeController::class, 'index'])->name('themes');
    Route::get('/themes/{slug}', [ThemeController::class, 'show'])->name('theme.question');
//    Route::get('/themes/{themes:slug}/{questions:slug}', [ThemeController::class, 'show'])->name('theme.answer');

    Route::prefix('/contact')->name('contact.')->group(function ()
    {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::post('/', [ContactController::class, 'store'])->name('store');
    });
    Route::get('/faq', function (){
        return view('front.faq');
    });
});


// Admin
Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin')
    ->group(function ()
    {
        Route::get('/', [AdminPanelController::class, 'index'])->name('panel');

        Route::get('/themes', Theme::class)->name('themes');

        Route::get('/questions', Question::class)->name('questions');
    }
    );



