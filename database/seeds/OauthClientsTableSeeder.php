<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Edu Personal Access Client',
                'secret' => '2Y2M6djcjBDCKvYAY6WcqQj37ZiRGWBktaEsffIk',
                'redirect' => 'http://localhost',
                'personal_access_client' => true,
                'password_client' => false,
                'revoked' => false,
                'created_at' => '2021-10-09 15:56:56',
                'updated_at' => '2021-10-09 15:56:56',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Edu Password Grant Client',
                'secret' => 'IU5Khqs3yTrCzDrhzNz3KzlE4CjkATBZyNEmgcto',
                'redirect' => 'http://localhost',
                'personal_access_client' => false,
                'password_client' => true,
                'revoked' => false,
                'created_at' => '2021-10-09 15:56:56',
                'updated_at' => '2021-10-09 15:56:56',
            ),
        ));
        
        
    }
}