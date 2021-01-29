<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('courses')->delete();

        \DB::table('courses')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Interface en Front-end',
                'description' => 'In deze course leer je de beginselen van de programmeertaal Javascript',
                'created_at' => '2020-06-30 20:46:09',
                'updated_at' => '2021-01-29 10:35:44',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'Programmeren',
                'description' => 'Beschrijving en competenties moeten hier nog bij.',
                'created_at' => '2021-01-29 10:29:40',
                'updated_at' => '2021-01-29 10:30:16',
            ),
        ));


    }
}
