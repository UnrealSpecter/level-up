<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Javascript',
                'description' => 'In deze course leer je de beginselen van de programmeertaal Javascript',
                'created_at' => '2020-06-30 20:46:09',
                'updated_at' => '2020-06-30 20:46:09',
            ),
        ));
        
        
    }
}