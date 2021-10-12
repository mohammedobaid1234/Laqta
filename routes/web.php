<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


Route::prefix('admins')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('rules', ProjectsController::class);

});
require __DIR__ . '/auth.php';
