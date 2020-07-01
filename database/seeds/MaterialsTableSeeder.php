<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('materials')->delete();
        
        \DB::table('materials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'W3schools: Javscript Variables',
                'link' => 'https://www.w3schools.com/js/js_variables.asp',
                'subject_id' => 1,
                'created_at' => '2020-06-30 21:24:46',
                'updated_at' => '2020-06-30 21:24:46',
            ),
        ));
        
        
    }
}