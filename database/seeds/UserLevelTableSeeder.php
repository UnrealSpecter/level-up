<?php

use Illuminate\Database\Seeder;

class UserLevelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_level')->delete();
        
        \DB::table('user_level')->insert(array (
            0 => 
            array (
                'user_id' => 2,
                'level_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'user_id' => 2,
                'level_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}