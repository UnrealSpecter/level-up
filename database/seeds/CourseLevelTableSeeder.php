<?php

use Illuminate\Database\Seeder;

class CourseLevelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('course_level')->delete();
        
        \DB::table('course_level')->insert(array (
            0 => 
            array (
                'course_id' => 1,
                'level_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'course_id' => 1,
                'level_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'course_id' => 2,
                'level_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'course_id' => 2,
                'level_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

        
    }
}