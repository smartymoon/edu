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
                'name' => 'School perferendis',
                'principal_id' => 1,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'School voluptatem',
                'principal_id' => 1,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'School occaecati',
                'principal_id' => 1,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'School deleniti',
                'principal_id' => 1,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'School explicabo',
                'principal_id' => 1,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'School cum',
                'principal_id' => 1,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'School temporibus',
                'principal_id' => 2,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'School ut',
                'principal_id' => 2,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'School repudiandae',
                'principal_id' => 2,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'School est',
                'principal_id' => 3,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'School laboriosam',
                'principal_id' => 3,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'School recusandae',
                'principal_id' => 3,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'School dicta',
                'principal_id' => 4,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'School dolores',
                'principal_id' => 4,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'School tempore',
                'principal_id' => 4,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'School officia',
                'principal_id' => 5,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'School voluptas',
                'principal_id' => 5,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'School ratione',
                'principal_id' => 5,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'School eum',
                'principal_id' => 6,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'School tempore',
                'principal_id' => 6,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'School nisi',
                'principal_id' => 6,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:11',
                'updated_at' => '2021-10-21 08:32:11',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'School error',
                'principal_id' => 7,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'School adipisci',
                'principal_id' => 7,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'School id',
                'principal_id' => 7,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'School culpa',
                'principal_id' => 7,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'School voluptas',
                'principal_id' => 7,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'School ad',
                'principal_id' => 7,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'School et',
                'principal_id' => 8,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'School sit',
                'principal_id' => 8,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'School quia',
                'principal_id' => 8,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'School quisquam',
                'principal_id' => 8,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'School sit',
                'principal_id' => 8,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'School repellat',
                'principal_id' => 8,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'School placeat',
                'principal_id' => 9,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'School fuga',
                'principal_id' => 9,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'School sit',
                'principal_id' => 9,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'School eligendi',
                'principal_id' => 9,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'School amet',
                'principal_id' => 9,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'School odit',
                'principal_id' => 9,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'School adipisci',
                'principal_id' => 10,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'School officiis',
                'principal_id' => 10,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'School ea',
                'principal_id' => 10,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'School dolore',
                'principal_id' => 10,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'School nobis',
                'principal_id' => 10,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'School dolor',
                'principal_id' => 10,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'School aspernatur',
                'principal_id' => 11,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'School voluptatem',
                'principal_id' => 11,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'School nihil',
                'principal_id' => 11,
                'if_approve' => false,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'School ipsum',
                'principal_id' => 11,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'School debitis',
                'principal_id' => 11,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'School et',
                'principal_id' => 11,
                'if_approve' => true,
                'created_at' => '2021-10-21 08:32:12',
                'updated_at' => '2021-10-21 08:32:12',
            ),
        ));
        
        
    }
}