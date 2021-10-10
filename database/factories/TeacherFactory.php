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

\DB::insert("INSERT INTO edu.oauth_clients (id, user_id, name, secret, redirect, personal_access_client, password_client, revoked, created_at, updated_at) VALUES (1, null, 'Edu Personal Access Client', '2Y2M6djcjBDCKvYAY6WcqQj37ZiRGWBktaEsffIk', 'http://localhost', 1, 0, 0, '2021-10-09 15:56:56', '2021-10-09 15:56:56')");
\DB::insert("INSERT INTO edu.oauth_clients (id, user_id, name, secret, redirect, personal_access_client, password_client, revoked, created_at, updated_at) VALUES (2, null, 'Edu Password Grant Client', 'IU5Khqs3yTrCzDrhzNz3KzlE4CjkATBZyNEmgcto', 'http://localhost', 0, 1, 0, '2021-10-09 15:56:56', '2021-10-09 15:56:56')");

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
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
