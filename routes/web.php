<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/artikel/{slug}', 'ArtikelController@index')
    ->name('artikel');

// Admin
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
        Route::resource('content-package', 'ContentPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('account-setting', 'AccountController');
        Route::patch('account-setting', 'AccountController@update')
            ->name('account-setting');
    });



// User-profile
Route::prefix('user-profile')
    ->namespace('User')
    ->middleware(['auth', 'user'])
    ->group(function () {
        Route::get('/', 'DataUserController@index')
            ->name('profile');
        Route::resource('edit-account', 'AcountUserController');
        Route::patch('edit-account', 'AcountUserController@update')
            ->name('account.update');
    });

Auth::routes(['verify' => true]);
