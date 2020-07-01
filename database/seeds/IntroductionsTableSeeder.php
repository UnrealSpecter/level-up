<?php

use Illuminate\Database\Seeder;

class IntroductionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('introductions')->delete();
        
        \DB::table('introductions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'body' => '<h1>Overzicht</h1><div>Level: Domein C Level 2<br>Duur: 3 weken<br>Methode: Weekplanning<br><br></div><h1>Voorkennis</h1><div>C1 HTML &amp; CSS<br><br></div><h1>Materialen</h1><div>Er wordt gebruik gemaakt van de volgende studiematerialen:</div><ul><li>www.w3schools.com</li><li>Je Laptop</li></ul><div><br></div><h1>Instructie&nbsp;</h1><div>Het is aan te bevelen om dit document van begin tot eind te volgen. Probeer zoveel mogelijk opdrachten uit. Laat tussendoor zoveel mogelijk aan de docent zien om te kijken of je op de goede weg zit.<br><br></div><h1>Doelen</h1><div>Na het bestuderen zal je in staat zijn om de basis beginselen van het programmeren in Javascript in de praktijk te brengen.<br><br></div><h1>Beoordeling</h1><div>Deze module wordt afgesloten met een eindopdracht.</div>',
                'module_id' => 1,
                'created_at' => '2020-06-30 20:58:29',
                'updated_at' => '2020-06-30 20:58:29',
            ),
        ));
        
        
    }
}