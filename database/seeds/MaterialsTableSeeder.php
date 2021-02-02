<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('materials')->delete();
        
        \DB::table('materials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Youtube Video over Variabelen',
                'link' => 'https://www.youtube.com/watch?v=WJ3-F02-F_Y',
                'subject_id' => 2,
                'created_at' => '2021-02-02 12:31:34',
                'updated_at' => '2021-02-02 12:31:34',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'W3Schools Javascript - Home',
                'link' => 'https://www.w3schools.com/js/default.asp',
                'subject_id' => 1,
                'created_at' => '2021-02-02 12:35:06',
                'updated_at' => '2021-02-02 12:40:26',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'W3Schools Javascript - Introduction',
                'link' => 'https://www.w3schools.com/js/js_intro.asp',
                'subject_id' => 1,
                'created_at' => '2021-02-02 12:40:26',
                'updated_at' => '2021-02-02 12:40:26',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'W3Schools Javascript - Where To',
                'link' => 'https://www.w3schools.com/js/js_whereto.asp',
                'subject_id' => 1,
                'created_at' => '2021-02-02 12:40:26',
                'updated_at' => '2021-02-02 12:40:26',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'W3Schools Javascript - Syntax',
                'link' => 'https://www.w3schools.com/js/js_syntax.asp',
                'subject_id' => 1,
                'created_at' => '2021-02-02 14:12:20',
                'updated_at' => '2021-02-02 14:12:20',
            ),
        ));

        
    }
}