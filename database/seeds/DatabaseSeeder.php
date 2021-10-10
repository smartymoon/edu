<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::insert("INSERT INTO edu.oauth_clients (id, user_id, name, secret, redirect, personal_access_client, password_client, revoked, created_at, updated_at) VALUES (1, null, 'Edu Personal Access Client', '2Y2M6djcjBDCKvYAY6WcqQj37ZiRGWBktaEsffIk', 'http://localhost', 1, 0, 0, '2021-10-09 15:56:56', '2021-10-09 15:56:56')");
        \DB::insert("INSERT INTO edu.oauth_clients (id, user_id, name, secret, redirect, personal_access_client, password_client, revoked, created_at, updated_at) VALUES (2, null, 'Edu Password Grant Client', 'IU5Khqs3yTrCzDrhzNz3KzlE4CjkATBZyNEmgcto', 'http://localhost', 0, 1, 0, '2021-10-09 15:56:56', '2021-10-09 15:56:56')");
        \DB::insert("INSERT INTO edu.oauth_personal_access_clients (id, client_id, created_at, updated_at) VALUES (1, 1, '2021-10-10 05:27:31', '2021-10-10 05:27:31');");



        factory(\App\Teacher::class)->states(\App\Teacher::Principal)->create([
            'email' => 'susan@edu.com'
        ])->each(function($teacher) {
            $teacher->manageSchools()->saveMany(
                factory(\App\School::class, 3)->states('approve')->make()
            );
            $teacher->manageSchools()->saveMany(
                factory(\App\School::class, 3)->states('not')->make()
            );
        });

        factory(\App\Teacher::class, 5)->states(\App\Teacher::Principal)
            ->create()
            ->each(function($teacher) {
                $teacher->manageSchools()->saveMany(
                    factory(\App\School::class, 3)->states('not')->make()
                );
                $teacher->manageSchools()->saveMany(
                   factory(\App\School::class, 3)->states('approve')->make()
                );
            });

        \App\School::approve()->get()->map(function($school) {
            factory(\App\Invitation::class, 5)->create([
                'school_id' => $school->id,
                'principal_id' => $school->principal_id
            ]);
            factory(\App\Student::class, 10)->create([
                'school_id' => $school->id,
            ]);
        });

        $school = \App\School::approve()->first();
        factory(\App\Invitation::class)->create([
            'slug' => 'c5c796e6-00ac-3d80-8d37-9188e62dd275',
            'school_id' => $school->id,
            'principal_id' => $school->principal_id
        ]);
    }
}
