<?php

use Illuminate\Database\Seeder;

class MaterialTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('material_tag')->delete();
        
        \DB::table('material_tag')->insert(array (
            0 => 
            array (
                'material_id' => 1,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}