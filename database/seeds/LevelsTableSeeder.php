<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('levels')->delete();
        
        \DB::table('levels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Level 1',
                'created_at' => '2020-06-30 20:47:08',
                'updated_at' => '2020-06-30 20:47:08',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Level 2',
                'created_at' => '2020-06-30 20:51:18',
                'updated_at' => '2021-02-01 22:05:32',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Level 3',
                'created_at' => '2020-06-30 20:51:18',
                'updated_at' => '2020-06-30 20:51:18',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Level 1',
                'created_at' => '2021-02-01 21:49:52',
                'updated_at' => '2021-02-01 21:49:52',
            ),
            4 => 
            array (
                'id' => 7,
                'title' => 'Level 2',
                'created_at' => '2021-02-01 22:27:39',
                'updated_at' => '2021-02-01 22:27:39',
            ),
            5 => 
            array (
                'id' => 8,
                'title' => 'Level 1',
                'created_at' => '2021-02-01 22:37:39',
                'updated_at' => '2021-02-01 22:37:39',
            ),
        ));
        
        
    }
}