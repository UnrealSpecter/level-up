<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Artikel',
                'icon' => 'mz5dZVTC6W5AsH44ovpMZNG04V3kq74zig8dbZty.svg',
                'created_at' => '2020-06-30 21:25:42',
                'updated_at' => '2020-06-30 21:25:42',
            ),
        ));
        
        
    }
}