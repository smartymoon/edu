<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Quibusdam ipsam occaecati velit.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            1 => 
            array (
                'id' => 2,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Cumque perspiciatis mollitia minima laudantium autem.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            2 => 
            array (
                'id' => 3,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Tempora et quaerat sint aliquid at accusantium doloribus.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            3 => 
            array (
                'id' => 4,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Recusandae harum velit voluptas.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            4 => 
            array (
                'id' => 5,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Non excepturi necessitatibus inventore id.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            5 => 
            array (
                'id' => 6,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Amet deserunt non maxime et architecto quibusdam ad.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            6 => 
            array (
                'id' => 7,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Non voluptatem omnis autem dolore ipsa vitae.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            7 => 
            array (
                'id' => 8,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Ut dicta aut reiciendis earum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            8 => 
            array (
                'id' => 9,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Facere quo ea ea veritatis voluptate commodi beatae.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            9 => 
            array (
                'id' => 10,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Nisi ut molestiae saepe et hic illum ipsum.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            10 => 
            array (
                'id' => 11,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Voluptatum dolorum expedita qui.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            11 => 
            array (
                'id' => 12,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Provident error deserunt neque natus suscipit est error aut.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            12 => 
            array (
                'id' => 13,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Quos labore consequatur voluptas sint.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            13 => 
            array (
                'id' => 14,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Et quia molestiae ullam totam voluptate itaque.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            14 => 
            array (
                'id' => 15,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Et nulla magnam qui eos laudantium unde adipisci.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            15 => 
            array (
                'id' => 16,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Aut aliquid rerum et soluta et et.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            16 => 
            array (
                'id' => 17,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Beatae est sint perferendis rerum nostrum architecto quibusdam qui.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            17 => 
            array (
                'id' => 18,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Cum qui ratione laborum cupiditate dolor.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            18 => 
            array (
                'id' => 19,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Est quo fuga dolor vel ducimus voluptatem.',
                'seen' => true,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
            19 => 
            array (
                'id' => 20,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Tempore ullam molestiae recusandae laboriosam necessitatibus eaque.',
                'seen' => false,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
        ));
        
        
    }
}