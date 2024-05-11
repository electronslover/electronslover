<?php

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
Route::get('/', [\App\Http\Controllers\PagesController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'contact']);
Route::get('/aboutus', [\App\Http\Controllers\PagesController::class, 'aboutus']);
Route::get('/gallery', [\App\Http\Controllers\PagesController::class, 'gallery']);
Route::resource('/blog', \App\Http\Controllers\PostController::class);


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

