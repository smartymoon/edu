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

Route::get('/api/line/login', 'LineController@redirectToLine');

Route::middleware('auth:api')->group(function() {
    Route::get('/', 'HomeController@index');
});

