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
                'first_name' => 'Dr. Ollie Sporer',
                'last_name' => 'Ayden Stroman',
                'email' => 'admin@admin.com',
                'email_verified_at' => '2020-06-30 20:44:16',
                'password' => '$2y$10$9HKaDoL4seApRPqmq2GT5Ogs1zTdbJ3bV4wnSztRCBztEbnxLwt5G',
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
                'password' => '$2y$10$hjCjJKOvVfgNR6aae79yaeIE6fHmoW3NQTd4vEVtiHz7DzzBveANS',
                'remember_token' => NULL,
                'created_at' => '2020-06-30 21:14:02',
                'updated_at' => '2020-06-30 21:14:02',
            ),
        ));
        
        
    }
}