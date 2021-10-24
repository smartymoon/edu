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
        
        \DB::table('admin_users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$JtsrFRbsJi3/tqwoQth8Mev/O0LkkfI4k8gtySYJK5F6xGk6wrR.C',
                'name' => 'Administrator',
                'avatar' => null,
                'remember_token' => null,
                'created_at' => '2021-10-21 08:32:40',
                'updated_at' => '2021-10-21 08:32:40',
            ),
        ));
    }
}
