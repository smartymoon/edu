<?php

use App\Teacher;
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

Route::post('/students', 'StudentController@store');

Route::post('/register', 'Auth\\RegisterController@register')->name('register');
Route::post('/login', 'Auth\\LoginController@token');
Route::post('/normal_teacher', 'TeacherController@storeNormalTeacher');
Route::get('/invitations/{slug}', 'TeacherController@showInvitation');
Route::post('/normal_teacher', 'TeacherController@storeNormalTeacher');

Route::middleware('auth:api')->group(function() {

    // for principal only
    Route::middleware('scope:'. Teacher::Principal)->group(function() {
        Route::get('/schools',  'SchoolController@index');
        Route::post('/schools', 'SchoolController@store');

        Route::get('/invitations', 'InvitationController@index');
        Route::post('/invitations', 'InvitationController@store');

    });

    // for normal teacher only
    Route::middleware('scope:'. Teacher::Normal)->group(function() {
        Route::get('hello', function() {
            return auth()->user();
        });
    });

    // for all teacher
    Route::middleware("scope:". Teacher::Principal . "," . Teacher::Normal)->group(function() {
        Route::get('/schools/{school}/students', 'SchoolController@students');
    });
});
