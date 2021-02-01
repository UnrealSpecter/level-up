<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('levels')->delete();

        \DB::table('levels')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Level 1',
                'created_at' => '2020-06-30 20:47:08',
                'updated_at' => '2020-06-30 20:47:08',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'Level 2',
                'created_at' => '2020-06-30 20:51:18',
                'updated_at' => '2020-06-30 20:51:18',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'Level 3',
                'created_at' => '2020-06-30 20:51:18',
                'updated_at' => '2020-06-30 20:51:18',
            ),
        ));


    }
}
