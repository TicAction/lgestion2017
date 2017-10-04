<?php

use Illuminate\Database\Seeder;

class KidUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kid_user')->delete();
        
        \DB::table('kid_user')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'kid_id' => 1,
            ),
            1 => 
            array (
                'user_id' => 1,
                'kid_id' => 2,
            ),
            2 => 
            array (
                'user_id' => 1,
                'kid_id' => 3,
            ),
            3 => 
            array (
                'user_id' => 1,
                'kid_id' => 6,
            ),
        ));
        
        
    }
}