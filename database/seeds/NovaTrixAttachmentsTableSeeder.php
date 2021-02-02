<?php

use Illuminate\Database\Seeder;

class NovaTrixAttachmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nova_trix_attachments')->delete();
        
        \DB::table('nova_trix_attachments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attachable_type' => 'App\\Subject',
                'attachable_id' => 1,
                'attachment' => 'y5IcMIDPVm3U4o7nD575mD9NN1t4VDAZqColsl6r.png',
                'disk' => 'public',
                'url' => 'http://level-up.test/storage/y5IcMIDPVm3U4o7nD575mD9NN1t4VDAZqColsl6r.png',
                'created_at' => '2021-02-02 12:14:43',
                'updated_at' => '2021-02-02 12:14:43',
            ),
        ));

        
    }
}