<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->numberBetween(100, 90000) . '@student.com',
        'password' => \Illuminate\Support\Facades\Hash::make('123456'),
    ];
});
