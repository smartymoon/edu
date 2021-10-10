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
        factory(\App\Teacher::class)->states(\App\Teacher::Principal)->create([
            'email' => 'susan@edu.com'
        ])->each(function($teacher) {
            $teacher->manageSchools()->saveMany(
                factory(\App\School::class, 3)->states('not')->make()
            );
            $teacher->manageSchools()->saveMany(
                factory(\App\School::class, 3)->states('approve')->make()
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
        });
    }
}
