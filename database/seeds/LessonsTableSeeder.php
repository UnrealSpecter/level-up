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
            1 => 
            array (
                'id' => 2,
                'title' => 'Studieblok 2: Loops in Javascript',
                'description' => 'Je gaat in deze les leren op welke verschillende manieren loops gebruikt kunnen worden.',
                'created_at' => '2021-02-01 22:10:52',
                'updated_at' => '2021-02-01 22:11:31',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Inleiding',
                'description' => 'HTML is de taal die gebruikt wordt om webpagina’s te maken die in een browser (Internet Explorer,
Firefox, Chrome) bekeken kunnen worden. Je gebruikt HTML door in een document door tags aan te
geven wat een stuk van het document betekent. Bijvoorbeeld kun je de titel van het document
tussen TITLE-tags zetten',
                'created_at' => '2021-02-01 22:29:55',
                'updated_at' => '2021-02-01 22:29:55',
            ),
        ));

        
    }
}