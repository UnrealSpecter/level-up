<?php

use Illuminate\Database\Seeder;

class SubjectAssignmentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subject_assignment')->delete();
        
        \DB::table('subject_assignment')->insert(array (
            0 => 
            array (
                'subject_id' => 1,
                'assignment_id' => 7,
                'is_done' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'subject_id' => 2,
                'assignment_id' => 8,
                'is_done' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'subject_id' => 3,
                'assignment_id' => 9,
                'is_done' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

        
    }
}