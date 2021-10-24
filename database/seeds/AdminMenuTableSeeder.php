<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array(
            0 =>
            array(
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Dashboard',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            1 =>
            array(
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            2 =>
            array(
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            3 =>
            array(
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            4 =>
            array(
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            5 =>
            array(
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            6 =>
            array(
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            7 =>
            array(
                'id' => 8,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Teachers',
                'icon' => 'fa-list',
                'uri' => 'teachers',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            8 =>
            array(
                'id' => 9,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Schools',
                'icon' => 'fa-list',
                'uri' => 'schools',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            9 =>
            array(
                'id' => 10,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Students',
                'icon' => 'fa-list',
                'uri' => 'students',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            10 =>
            array(
                'id' => 11,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Line-users',
                'icon' => 'fa-list',
                'uri' => 'line-users',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            11 =>
            array(
                'id' => 12,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Admin-messages',
                'icon' => 'fa-list',
                'uri' => 'admin-messages',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
        ));
    }
}
