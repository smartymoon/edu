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

$factory->define(App\School::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->state(App\School::class, 'approve', [
    'if_approve' => true
]);

$factory->state(App\School::class, 'not', [
    'if_approve' => false
]);

