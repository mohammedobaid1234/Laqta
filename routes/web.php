<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\RulesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


Route::prefix('admins')->group(function () {


    Route::prefix('applications')->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('projects', ProjectsController::class);
        Route::resource('rules', RulesController::class);
    });
    Route::prefix('pages')->group(function () {
        Route::resource('clients', ClientsController::class);
    });
});
//ddddd

require __DIR__ . '/auth.php';
