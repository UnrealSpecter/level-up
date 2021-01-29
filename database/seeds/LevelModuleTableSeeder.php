<?php

use Illuminate\Database\Seeder;

class LevelModuleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('level_module')->delete();
        
        \DB::table('level_module')->insert(array (
            0 => 
            array (
                'level_id' => 2,
                'module_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

        
    }
}