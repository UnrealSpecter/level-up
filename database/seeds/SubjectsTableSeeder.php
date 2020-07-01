<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Wat zijn variabelen?',
                'description' => 'In dit blok gaan we het hebben over wat variabelen zijn en waar ze voor gebruikt worden.',
                'created_at' => '2020-06-30 21:06:07',
                'updated_at' => '2020-06-30 21:06:07',
            ),
        ));
        
        
    }
}