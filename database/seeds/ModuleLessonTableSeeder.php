<?php

use Illuminate\Database\Seeder;

class ModuleLessonTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('module_lesson')->delete();
        
        \DB::table('module_lesson')->insert(array (
            0 => 
            array (
                'module_id' => 1,
                'lesson_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}