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
                'course_id' => 4,
                'level_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'course_id' => 3,
                'level_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'course_id' => 5,
                'level_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'course_id' => 2,
                'level_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'course_id' => 2,
                'level_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

        
    }
}