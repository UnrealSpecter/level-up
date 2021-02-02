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
                'id' => 4,
                'first_name' => 'Admin',
                'last_name' => 'Doe',
                'email' => 'admin@admin.com',
                'email_verified_at' => '2020-06-30 20:44:16',
                'password' => '$2y$10$gqEMCbZlKtn3fWFehOn6geoyzym3D8eJ4S1a66fJa74H/s9yVE6RS',
                'remember_token' => 'My7naxWFJ2',
                'created_at' => '2020-06-30 20:44:16',
                'updated_at' => '2020-06-30 20:44:16',
            ),
        ));

        
    }
}