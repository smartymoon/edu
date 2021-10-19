<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'School consectetur',
                'principal_id' => 1,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:33',
                'updated_at' => '2021-10-19 07:37:33',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'School quaerat',
                'principal_id' => 1,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:33',
                'updated_at' => '2021-10-19 07:37:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'School ipsum',
                'principal_id' => 1,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:33',
                'updated_at' => '2021-10-19 07:37:33',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'School non',
                'principal_id' => 1,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:33',
                'updated_at' => '2021-10-19 07:37:33',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'School totam',
                'principal_id' => 1,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:33',
                'updated_at' => '2021-10-19 07:37:33',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'School repellat',
                'principal_id' => 1,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:33',
                'updated_at' => '2021-10-19 07:37:33',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'School sapiente',
                'principal_id' => 2,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'School saepe',
                'principal_id' => 2,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'School sed',
                'principal_id' => 2,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'School odio',
                'principal_id' => 3,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'School debitis',
                'principal_id' => 3,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'School possimus',
                'principal_id' => 3,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'School quo',
                'principal_id' => 4,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'School praesentium',
                'principal_id' => 4,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'School et',
                'principal_id' => 4,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'School maiores',
                'principal_id' => 5,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'School saepe',
                'principal_id' => 5,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'School voluptates',
                'principal_id' => 5,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'School veniam',
                'principal_id' => 6,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'School dignissimos',
                'principal_id' => 6,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'School nesciunt',
                'principal_id' => 6,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'School modi',
                'principal_id' => 7,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'School sed',
                'principal_id' => 7,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'School explicabo',
                'principal_id' => 7,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'School officia',
                'principal_id' => 7,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'School id',
                'principal_id' => 7,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'School quod',
                'principal_id' => 7,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'School dolores',
                'principal_id' => 8,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'School et',
                'principal_id' => 8,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'School voluptatem',
                'principal_id' => 8,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'School provident',
                'principal_id' => 8,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'School id',
                'principal_id' => 8,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'School veniam',
                'principal_id' => 8,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'School quibusdam',
                'principal_id' => 9,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'School mollitia',
                'principal_id' => 9,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'School ea',
                'principal_id' => 9,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'School quae',
                'principal_id' => 9,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'School doloribus',
                'principal_id' => 9,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'School placeat',
                'principal_id' => 9,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'School quia',
                'principal_id' => 10,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'School quia',
                'principal_id' => 10,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'School cumque',
                'principal_id' => 10,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'School nulla',
                'principal_id' => 10,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'School tempora',
                'principal_id' => 10,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'School vero',
                'principal_id' => 10,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'School est',
                'principal_id' => 11,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'School ipsam',
                'principal_id' => 11,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'School rem',
                'principal_id' => 11,
                'if_approve' => false,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'School tempore',
                'principal_id' => 11,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'School architecto',
                'principal_id' => 11,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'School omnis',
                'principal_id' => 11,
                'if_approve' => true,
                'created_at' => '2021-10-19 07:37:34',
                'updated_at' => '2021-10-19 07:37:34',
            ),
        ));
        
        
    }
}