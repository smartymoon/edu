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
        'email' => $faker->unique()->numberBetween(100, 10000) . '@teacher.com',
        'password' => \Illuminate\Support\Facades\Hash::make('123456'),
        'role' => \App\Teacher::Principal
    ];
});

$factory->state(App\Teacher::class, \App\Teacher::Principal, [
    'role' => \App\Teacher::Principal,
]);

$factory->state(App\Teacher::class, \App\Teacher::Normal, [
    'role' => \App\Teacher::Normal,
]);
