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
                'message' => 'Rerum eligendi ut itaque a porro.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            1 => 
            array (
                'id' => 2,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Non vitae quasi deserunt labore ipsam sint.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            2 => 
            array (
                'id' => 3,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Voluptatum repellat dolore quis tempora velit a.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            3 => 
            array (
                'id' => 4,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Ut pariatur fuga est reiciendis.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            4 => 
            array (
                'id' => 5,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Cumque facilis ea ut corrupti velit quibusdam.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            5 => 
            array (
                'id' => 6,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Exercitationem corporis non placeat ut soluta.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            6 => 
            array (
                'id' => 7,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Voluptatibus et in ducimus numquam aperiam sint repellat sit.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            7 => 
            array (
                'id' => 8,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Dolorem et dolor rerum facilis fugiat molestiae inventore.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            8 => 
            array (
                'id' => 9,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Amet doloribus sit cupiditate hic voluptatem iure libero.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            9 => 
            array (
                'id' => 10,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Eligendi et non voluptatem deserunt facere necessitatibus.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            10 => 
            array (
                'id' => 11,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Earum hic voluptatem repudiandae similique beatae.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            11 => 
            array (
                'id' => 12,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Sequi nam minus non fuga temporibus commodi.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            12 => 
            array (
                'id' => 13,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Nam voluptas ut eveniet voluptatem dolorem quae unde.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            13 => 
            array (
                'id' => 14,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Sit cum nostrum et deserunt aut quisquam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            14 => 
            array (
                'id' => 15,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Vel perferendis mollitia quo commodi sit.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            15 => 
            array (
                'id' => 16,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Debitis rerum quas expedita magnam.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            16 => 
            array (
                'id' => 17,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Ipsam atque id voluptates veritatis quia.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            17 => 
            array (
                'id' => 18,
                'from_id' => 1,
                'from_type' => 'teacher',
                'to_id' => 1,
                'to_type' => 'student',
                'message' => 'Sit quia sit minima id qui quia.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            18 => 
            array (
                'id' => 19,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Sequi id recusandae dolor sunt.',
                'seen' => true,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
            19 => 
            array (
                'id' => 20,
                'from_id' => 1,
                'from_type' => 'student',
                'to_id' => 1,
                'to_type' => 'teacher',
                'message' => 'Est aut laborum ab dolorum quaerat.',
                'seen' => false,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
        ));
        
        
    }
}