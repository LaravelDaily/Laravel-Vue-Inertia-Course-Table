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

Route::view('/', 'dashboard')->name('dashboard');

Route::get('posts', [\App\Http\Controllers\PostController::class, 'index'])
    ->name('posts.index');
Route::inertia('pages/about', 'About')->name('pages.about');

Route::inertia('login', 'Auth/Login')->name('login');
