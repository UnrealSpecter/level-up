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
        ));
        
        
    }
}