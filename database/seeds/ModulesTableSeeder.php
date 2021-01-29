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
                'title' => 'Javscript',
                'code' => 'C2',
                'description' => 'De taal Javascript dat gebruikt wordt om HTML & CSS interactief te maken.',
                'created_at' => '2020-06-30 20:53:56',
                'updated_at' => '2020-06-30 20:53:56',
            ),
        ));


    }
}
