<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->numberBetween(100, 10000) . '@student.com',
        'password' => \Illuminate\Support\Facades\Hash::make('123456'),
    ];
});
