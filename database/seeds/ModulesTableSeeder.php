<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modules')->delete();
        
        \DB::table('modules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Javascript',
                'code' => 'C2',
                'description' => 'De taal Javascript dat gebruikt wordt om HTML & CSS interactief te maken.',
                'created_at' => '2020-06-30 20:53:56',
                'updated_at' => '2021-02-01 22:34:41',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'HTML & CSS',
                'code' => 'A1',
                'description' => 'In deze opdracht leer je HTML5 gebruiken voor het indelen en CSS3 voor het opmaken van een
webpagina. Eerst leer je de twee technieken vervolgens gebruik je deze bij het maken van de
eindopdracht.',
                'created_at' => '2021-02-01 22:29:54',
                'updated_at' => '2021-02-01 22:29:54',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Basisprogrammeren PHP',
                'code' => 'A1',
                'description' => 'De beginselen van programmeren in PHP.',
                'created_at' => '2021-02-01 22:38:38',
                'updated_at' => '2021-02-01 22:38:38',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Code indelen in PHP',
                'code' => 'A2',
                'description' => 'Code opdelen in php.',
                'created_at' => '2021-02-01 22:44:06',
                'updated_at' => '2021-02-01 22:44:06',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Introductie programmeren in JAVA',
                'code' => 'A1',
                'description' => 'Programmeren in Java',
                'created_at' => '2021-02-01 22:44:54',
                'updated_at' => '2021-02-01 22:44:54',
            ),
        ));
        
        
    }
}