<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lessons')->delete();
        
        \DB::table('lessons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Studieblok 1: Variablen in Javascript',
                'description' => 'Het eerste studieblok gaat over het gebruik van variablen in Javascript.',
                'created_at' => '2020-06-30 20:59:52',
                'updated_at' => '2020-06-30 21:03:47',
            ),
        ));
        
        
    }
}