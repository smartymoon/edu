<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'Auth\\RegisterController@register')->name('register');
Route::post('/login', 'Auth\\LoginController@token');

Route::middleware('auth:api')->group(function() {
    Route::get('hello', function() {
        return auth()->user();
    });
});
