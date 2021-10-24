<?php

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('follows')->delete();
        
        \DB::table('follows')->insert(array(
            0 =>
            array(
                'id' => 1,
                'teacher_id' => 12,
                'student_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ),
            1 =>
            array(
                'id' => 2,
                'teacher_id' => 13,
                'student_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ),
            2 =>
            array(
                'id' => 3,
                'teacher_id' => 14,
                'student_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ),
            3 =>
            array(
                'id' => 4,
                'teacher_id' => 15,
                'student_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ),
            4 =>
            array(
                'id' => 5,
                'teacher_id' => 16,
                'student_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ),
            5 =>
            array(
                'id' => 6,
                'teacher_id' => 1,
                'student_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ),
            6 =>
            array(
                'id' => 7,
                'teacher_id' => 1,
                'student_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ),
            7 =>
            array(
                'id' => 8,
                'teacher_id' => 1,
                'student_id' => 4,
                'created_at' => null,
                'updated_at' => null,
            ),
            8 =>
            array(
                'id' => 9,
                'teacher_id' => 1,
                'student_id' => 5,
                'created_at' => null,
                'updated_at' => null,
            ),
            9 =>
            array(
                'id' => 10,
                'teacher_id' => 1,
                'student_id' => 6,
                'created_at' => null,
                'updated_at' => null,
            ),
        ));
    }
}
