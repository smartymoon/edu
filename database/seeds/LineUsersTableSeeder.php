<?php

use Illuminate\Database\Seeder;

class LineUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('line_users')->delete();
        
        \DB::table('line_users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'official_id' => 'U585911a40a7dc7ccbd4791ba90a03218',
                'name' => 'PeterSun',
                'created_at' => '2021-10-12 10:53:51',
                'updated_at' => '2021-10-12 10:53:54',
            ),
        ));
    }
}
