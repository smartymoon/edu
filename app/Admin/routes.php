<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('teachers', 'TeacherController');
    $router->resource('schools', 'SchoolController');
    $router->resource('students', 'StudentController');
    $router->resource('line-users', 'LineUserController');
    $router->resource('admin-messages', 'AdminMessageController');
    $router->post('send', 'MessageController@send');
    $router->post('line_send', 'MessageController@lineSend');
});
