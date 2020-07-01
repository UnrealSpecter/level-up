<?php

use Illuminate\Database\Seeder;

class LessonSubjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lesson_subject')->delete();
        
        \DB::table('lesson_subject')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lesson_id' => 1,
                'subject_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}