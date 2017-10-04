<?php

use Illuminate\Database\Seeder;

class BehaviorKidTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('behavior_kid')->delete();
        
        \DB::table('behavior_kid')->insert(array (
            0 => 
            array (
                'kid_id' => 1,
                'behavior_id' => 2,
            ),
            1 => 
            array (
                'kid_id' => 3,
                'behavior_id' => 1,
            ),
            2 => 
            array (
                'kid_id' => 4,
                'behavior_id' => 1,
            ),
        ));
        
        
    }
}