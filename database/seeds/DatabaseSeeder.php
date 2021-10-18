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
        \DB::insert("INSERT INTO oauth_clients (id, user_id, name, secret, redirect, personal_access_client, password_client, revoked, created_at, updated_at) VALUES (1, null, 'Edu Personal Access Client', '2Y2M6djcjBDCKvYAY6WcqQj37ZiRGWBktaEsffIk', 'http://localhost', true, false, 0, '2021-10-09 15:56:56', '2021-10-09 15:56:56')");
        \DB::insert("INSERT INTO oauth_clients (id, user_id, name, secret, redirect, personal_access_client, password_client, revoked, created_at, updated_at) VALUES (2, null, 'Edu Password Grant Client', 'IU5Khqs3yTrCzDrhzNz3KzlE4CjkATBZyNEmgcto', 'http://localhost', false, true, 0, '2021-10-09 15:56:56', '2021-10-09 15:56:56')");
        \DB::insert("INSERT INTO oauth_personal_access_clients (id, client_id, created_at, updated_at) VALUES (1, 1, '2021-10-10 05:27:31', '2021-10-10 05:27:31');");
        \DB::insert("INSERT INTO line_users (id, official_id, name, created_at, updated_at) VALUES (1, 'U585911a40a7dc7ccbd4791ba90a03218', 'PeterSun', '2021-10-12 10:53:51', '2021-10-12 10:53:54');");

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
                    factory(\App\School::class, 1)->states('not')->make()
                );
                $teacher->manageSchools()->saveMany(
                   factory(\App\School::class, 2)->states('approve')->make()
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
            $i = 0;
            factory(\App\Invitation::class, 10)->create([
                'if_register' => true,
                'school_id' => $school->id,
                'principal_id' => $school->principal_id
            ])->each(function($invitation) use ($school, &$i) {
                if ($i == 0) {
                    factory(\App\Teacher::class)->states(\App\Teacher::Normal)->create([
                        'school_id' =>  $school->id,
                        'email' => 'normal@teacher.com'
                    ]);
                } else {
                    factory(\App\Teacher::class)->states(\App\Teacher::Normal)->create([
                        'school_id' =>  $school->id,
                    ]);
                }
                $i++;
            });
            factory(\App\Student::class, 10)->create([
                'school_id' => $school->id,
            ]);
        });

        $school = \App\School::approve()->first();
        $student = \App\Student::first();
        $student->email = 'student@student.com';
        $student->school_id = $school->id;
        $student->save();

        factory(\App\Invitation::class)->create([
            'slug' => 'c5c796e6-00ac-3d80-8d37-9188e62dd275',
            'school_id' => $school->id,
            'principal_id' => $school->principal_id
        ]);

        Artisan::call('admin:install');
        Artisan::call('admin:generate-menu');
        for ($i = 0; $i < 5; $i++) {
            factory(\App\Message::class)->create([
                'from_type' => 'teacher',
                'from_id' => 1,
                'to_type' => 'student',
                'to_id' => 1,
                'seen' => true
            ]);

            factory(\App\Message::class)->create([
                'from_type' => 'teacher',
                'from_id' => 1,
                'to_type' => 'student',
                'to_id' => 1,
                'seen' => false,
            ]);
            factory(\App\Message::class)->create([
                'to_type' => 'teacher',
                'to_id' => 1,
                'from_type' => 'student',
                'from_id' => 1,
                'seen' => true
            ]);

            factory(\App\Message::class)->create([
                'to_type' => 'teacher',
                'to_id' => 1,
                'from_type' => 'student',
                'from_id' => 1,
                'seen' => false
            ]);
        }

        $teacher_ids = \App\Teacher::where('school_id', $school->id)->limit(5)->pluck('id');
        $student->followedTeachers()->attach($teacher_ids);

        $teacher = \App\Teacher::first();
        $students_id = \App\Student::where('school_id', $teacher->id)->limit(5)->pluck('id');
        $teacher->studentsFollowMe()->attach($students_id);

        for ($i = 0; $i <= 10; $i++) {
            factory(\App\AdminMessage::class, 10)->create([
                'messageable_type' => 'App\Teacher',
                'messageable_id' => $i
            ]);
            factory(\App\AdminMessage::class, 10)->create([
                'messageable_type' => 'App\Student',
                'messageable_id' => $i
            ]);
        }
    }
}
