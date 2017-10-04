<?php

use Illuminate\Database\Seeder;

class BehaviorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('behaviors')->delete();
        
        \DB::table('behaviors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'behavior' => 'toto',
                'behave_date' => '2017-10-02',
                'user_id' => 1,
                'created_at' => '2017-10-02 23:13:00',
                'updated_at' => '2017-10-02 23:13:01',
            ),
            1 => 
            array (
                'id' => 2,
                'behavior' => 'ttaa',
                'behave_date' => '2017-10-02',
                'user_id' => 1,
                'created_at' => '2017-10-02 23:13:17',
                'updated_at' => '2017-10-02 23:13:18',
            ),
        ));
        
        
    }
}