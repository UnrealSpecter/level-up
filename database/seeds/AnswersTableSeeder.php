<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('answers')->delete();
        
        \DB::table('answers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'answer' => 'let variabele = "waarde"',
                'is_correct' => 1,
                'assignment_id' => 7,
                'created_at' => '2020-06-30 21:19:11',
                'updated_at' => '2020-06-30 21:19:11',
            ),
            1 => 
            array (
                'id' => 2,
                'answer' => 'String variabele = naam;',
                'is_correct' => 0,
                'assignment_id' => 7,
                'created_at' => '2020-06-30 21:20:57',
                'updated_at' => '2020-06-30 21:20:57',
            ),
        ));
        
        
    }
}