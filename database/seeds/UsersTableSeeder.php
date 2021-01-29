<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'first_name' => 'Admin',
                'last_name' => 'Doe',
                'email' => 'admin@admin.com',
                'email_verified_at' => '2020-06-30 20:44:16',
                'password' => bcrypt('password'),
                'remember_token' => 'My7naxWFJ2',
                'created_at' => '2020-06-30 20:44:16',
                'updated_at' => '2020-06-30 20:44:16',
            ),
            1 =>
            array (
                'id' => 2,
                'first_name' => 'Tomi',
                'last_name' => 'Ristic',
                'email' => 'tomi_emmen@hotmail.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('password'),
                'remember_token' => NULL,
                'created_at' => '2020-06-30 21:14:02',
                'updated_at' => '2020-06-30 21:14:02',
            ),
            2 =>
            array (
                'id' => 3,
                'first_name' => 'Erik',
                'last_name' => 'Mast',
                'email' => 'e.mast@drenthecollege.nl',
                'email_verified_at' => NULL,
                'password' => bcrypt('password'),
                'remember_token' => NULL,
                'created_at' => '2020-06-30 21:14:02',
                'updated_at' => '2020-06-30 21:14:02',
            ),
        ));


    }
}
