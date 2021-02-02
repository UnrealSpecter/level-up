<?php

use Illuminate\Database\Seeder;

class CompetenceLevelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('competence_level')->delete();
        
        \DB::table('competence_level')->insert(array (
            0 => 
            array (
                'id' => 5,
                'competence_id' => 5,
                'level_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'competence_id' => 6,
                'level_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'competence_id' => 7,
                'level_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'competence_id' => 8,
                'level_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'competence_id' => 9,
                'level_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 10,
                'competence_id' => 10,
                'level_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'competence_id' => 11,
                'level_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'competence_id' => 12,
                'level_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'competence_id' => 14,
                'level_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'competence_id' => 15,
                'level_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'competence_id' => 16,
                'level_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'competence_id' => 17,
                'level_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

        
    }
}