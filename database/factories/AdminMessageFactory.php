<?php

use Faker\Generator as Faker;

$factory->define(\App\AdminMessage::class, function (Faker $faker) {
    return [
        'message' => $faker->sentence
    ];
});
