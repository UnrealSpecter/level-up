<?php

use Illuminate\Database\Seeder;

class AssignmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('assignments')->delete();
        
        \DB::table('assignments')->insert(array (
            0 => 
            array (
                'id' => 7,
                'title' => 'Opdracht 1: Wat is de correcte definitie van een variabele?',
                'description' => 'Het is heel belangrijk om te weten wat de correcte definitie is van een variabele. De bouwblokken van je applicatie.',
                'created_at' => '2020-06-30 21:17:08',
                'updated_at' => '2020-06-30 21:17:43',
            ),
            1 => 
            array (
                'id' => 8,
                'title' => 'Hoe werkt een loop in Javascript?',
                'description' => 'Kijk heel goed naar bron 2',
                'created_at' => '2021-02-02 15:26:24',
                'updated_at' => '2021-02-02 15:26:24',
            ),
            2 => 
            array (
                'id' => 9,
                'title' => 'Wat is de correcte syntax voor een loop in Javascript?',
                'description' => 'Tip! Kijk goed naar bron 2.',
                'created_at' => '2021-02-02 15:29:37',
                'updated_at' => '2021-02-02 15:29:37',
            ),
        ));

        
    }
}