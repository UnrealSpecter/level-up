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
            'description' => '<div>In dit blok gaan we het hebben over wat variabelen zijn en waar ze voor gebruikt worden.<br><br><strong>Bestudeer op w3schools.com (javascript tutorial):&nbsp;</strong></div><ul><li>Home&nbsp;</li><li>Introduction</li><li>Where to</li><li>Output&nbsp;</li><li>Syntax</li><li>Statements</li><li>Comments</li><li>Variables</li><li>Operators</li><li>Arithmetic</li><li>Assignment</li><li>Data types</li><li>Functions</li><li>Conditions</li><li>Switch</li></ul><div><br><strong>Hoe declareer je een variabele in Javascript?<br></strong>Onderstaand zie je een voorbeeld van hoe je een variabele declareert in Javascript.</div><div><br><figure data-trix-attachment="{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:5553,&quot;height&quot;:229,&quot;href&quot;:&quot;http://level-up.test/storage/y5IcMIDPVm3U4o7nD575mD9NN1t4VDAZqColsl6r.png&quot;,&quot;url&quot;:&quot;http://level-up.test/storage/y5IcMIDPVm3U4o7nD575mD9NN1t4VDAZqColsl6r.png&quot;,&quot;width&quot;:245}" data-trix-content-type="image/png" data-trix-attributes="{&quot;caption&quot;:&quot;Bovenstaand een voorbeeld van hoe variabelen in Javascript worden gedefineerd.&quot;,&quot;presentation&quot;:&quot;gallery&quot;}" class="attachment attachment--preview attachment--png"><a href="http://level-up.test/storage/y5IcMIDPVm3U4o7nD575mD9NN1t4VDAZqColsl6r.png"><img src="http://level-up.test/storage/y5IcMIDPVm3U4o7nD575mD9NN1t4VDAZqColsl6r.png" width="245" height="229"><figcaption class="attachment__caption attachment__caption--edited">Bovenstaand een voorbeeld van hoe variabelen in Javascript worden gedefineerd.</figcaption></a></figure><br><br><strong>Dit is een voorbeeld van een link met daarin een Youtube Video.<br></strong>Hier is een Iframe hard-coded toegevoegd omdat met de huidige opbouw er geen ruimte was voor video\'s. Dit is puur ter illustratie als voorbeeld toegevoegd. Er zou in de toekomst een soort les builder gemaakt kunnen worden waar alle vormgeving al in is gedaan en alleen content moet kunnen worden toegevoegd.<br><br></div>',
                'created_at' => '2020-06-30 21:06:07',
                'updated_at' => '2021-02-02 13:12:47',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Loops in Javascript',
                'description' => '<div>Je gaat in deze les leren op welke verschillende manieren loops gebruikt kunnen worden.</div>',
                'created_at' => '2021-02-01 22:29:55',
                'updated_at' => '2021-02-02 15:26:24',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Simpele Loops',
                'description' => '<div>Hier krijg je wat introductie over basic loops.</div>',
                'created_at' => '2021-02-02 15:29:36',
                'updated_at' => '2021-02-02 15:29:36',
            ),
        ));

        
    }
}