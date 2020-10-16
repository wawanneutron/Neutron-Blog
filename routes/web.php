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

// Home
Route::get('/', 'HomeController@index')
    ->name('home');

// Blog
Route::get('/blog', 'BlogController@index')
    ->name('blog');

// Artikel Wan nanti tambahin slug nya ya :) 
Route::get('/artikel', 'ArtikelController@index')
    ->name('artikel');

// Admin
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
    });
