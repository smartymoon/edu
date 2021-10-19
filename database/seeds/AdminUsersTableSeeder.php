<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$xLsbyihmS4YddJXKgnwFBOw8UHh6SA343S21tureHVXbuqWVLfq8q',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-19 07:38:02',
                'updated_at' => '2021-10-19 07:38:02',
            ),
        ));
        
        
    }
}