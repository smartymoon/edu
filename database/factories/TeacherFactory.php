<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->numberBetween(100, 90000) . '@teacher.com',
        'password' => \Illuminate\Support\Facades\Hash::make('123456'),
        'role' => \App\Teacher::PRINCIPAL
    ];
});

$factory->state(App\Teacher::class, \App\Teacher::PRINCIPAL, [
    'role' => \App\Teacher::PRINCIPAL,
]);

$factory->state(App\Teacher::class, \App\Teacher::NORMAL, [
    'role' => \App\Teacher::NORMAL,
]);
