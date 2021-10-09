<?php

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

Route::middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index');
});

Route::get('/login', 'Auth\\LoginController@showLoginForm')->name('login');
Route::get('/register', 'Auth\\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\\RegisterController@register')->name('register');
