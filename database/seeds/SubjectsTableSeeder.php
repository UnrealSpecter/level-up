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
                'description' => '<div>In dit blok gaan we het hebben over wat variabelen zijn en waar ze voor gebruikt worden.</div>',
                'created_at' => '2020-06-30 21:06:07',
                'updated_at' => '2021-02-01 22:34:41',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Studieblok 2: Loops in Javascript',
                'description' => 'Je gaat in deze les leren op welke verschillende manieren loops gebruikt kunnen worden.',
                'created_at' => '2021-02-01 22:29:55',
                'updated_at' => '2021-02-01 22:34:41',
            ),
        ));
        
        
    }
}