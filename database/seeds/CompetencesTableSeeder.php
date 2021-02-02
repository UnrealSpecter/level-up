<?php

use Illuminate\Database\Seeder;

class CompetencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('competences')->delete();
        
        \DB::table('competences')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'qwf',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:12:54',
                'updated_at' => '2021-02-01 21:12:54',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'qwfqwf',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:13:03',
                'updated_at' => '2021-02-01 21:13:03',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => 'qwdqwd',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:43:57',
                'updated_at' => '2021-02-01 21:43:57',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => 'weqwe',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:46:32',
                'updated_at' => '2021-02-01 21:46:32',
            ),
            4 => 
            array (
                'id' => 5,
                'description' => 'qwdqwdqwdqwd',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:46:47',
                'updated_at' => '2021-02-01 21:46:47',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => 'Voorstellen in het engels',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:49:52',
                'updated_at' => '2021-02-01 21:49:52',
            ),
            6 => 
            array (
                'id' => 7,
            'description' => 'Kan eenvoudige voorwaardelijke code (if/switch) en herhaalde code (for/while) toepassen bij het realiseren van een eenvoudige applicatie. B1-K2-W1',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:50:22',
                'updated_at' => '2021-02-01 21:50:22',
            ),
            7 => 
            array (
                'id' => 8,
                'description' => 'Kan het verloop van een algoritme beschrijven, bijvoorbeeld aan de hand van een PSD. B1-K2-W3',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:51:18',
                'updated_at' => '2021-02-01 21:51:18',
            ),
            8 => 
            array (
                'id' => 9,
                'description' => 'qweqweqweqwe',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:51:46',
                'updated_at' => '2021-02-01 21:51:46',
            ),
            9 => 
            array (
                'id' => 10,
                'description' => 'Kan webpagina’s maken met HTML5 en CSS3 waarbij inhoud en opmaak duidelijk gescheiden zijn.  B1-k2-w1',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:53:55',
                'updated_at' => '2021-02-01 21:53:55',
            ),
            10 => 
            array (
                'id' => 11,
                'description' => 'Kan online documentatie toepassen om nog niet bekende onderdelen van HTML5 en CSS3 toe te passen.',
                'level_id' => NULL,
                'created_at' => '2021-02-01 21:53:56',
                'updated_at' => '2021-02-01 21:53:56',
            ),
            11 => 
            array (
                'id' => 12,
                'description' => 'Kan langere code opdelen in kleinere onderdelen door bijvoorbeeld functies/methoden te gebruiken. In de code worden herhaalde code-regels zo veel mogelijk voorkomen. B1-k2-w1 b1-k3-w1',
                'level_id' => NULL,
                'created_at' => '2021-02-01 22:27:39',
                'updated_at' => '2021-02-01 22:27:39',
            ),
            12 => 
            array (
                'id' => 14,
                'description' => 'Kan het verloop van een algoritme beschrijven, bijvoorbeeld aan de hand van een PSD. B1-k2-w3',
                'level_id' => NULL,
                'created_at' => '2021-02-01 22:37:39',
                'updated_at' => '2021-02-01 22:37:39',
            ),
            13 => 
            array (
                'id' => 15,
            'description' => 'Kan eenvoudige voorwaardelijke code (if/switch) en herhaalde code (for/while) toepassen bij het realiseren van een eenvoudige applicatie. b1-k2-w1',
                'level_id' => NULL,
                'created_at' => '2021-02-01 22:37:39',
                'updated_at' => '2021-02-01 22:37:39',
            ),
            14 => 
            array (
                'id' => 16,
                'description' => 'qwdqwd',
                'level_id' => NULL,
                'created_at' => '2021-02-02 09:26:38',
                'updated_at' => '2021-02-02 09:26:38',
            ),
            15 => 
            array (
                'id' => 17,
                'description' => 'qwdqwdqw',
                'level_id' => NULL,
                'created_at' => '2021-02-02 09:26:49',
                'updated_at' => '2021-02-02 09:26:49',
            ),
        ));

        
    }
}