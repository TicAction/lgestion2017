<?php

use Illuminate\Database\Seeder;

class KidsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kids')->delete();
        
        \DB::table('kids')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Nathaniel',
                'lastname' => 'Girard',
                'anniversary' => '2001-12-12',
                'created_at' => '2017-09-29 13:22:13',
                'updated_at' => '2017-10-03 22:20:50',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Marika',
                'lastname' => 'Girard',
                'anniversary' => '2004-06-16',
                'created_at' => '2017-10-02 12:25:30',
                'updated_at' => '2017-10-02 12:25:30',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'Tata',
                'lastname' => 'Deus',
                'anniversary' => '2004-06-16',
                'created_at' => '2017-10-02 12:26:06',
                'updated_at' => '2017-10-02 12:26:06',
            ),
            3 => 
            array (
                'id' => 4,
                'firstname' => 'Tata',
                'lastname' => 'Deus',
                'anniversary' => '2004-07-16',
                'created_at' => '2017-10-03 12:26:06',
                'updated_at' => '2017-10-02 12:26:06',
            ),
            4 => 
            array (
                'id' => 5,
                'firstname' => 'Marika',
                'lastname' => 'Girard',
                'anniversary' => '2004-02-16',
                'created_at' => '2017-10-02 12:25:30',
                'updated_at' => '2017-10-02 12:25:30',
            ),
            5 => 
            array (
                'id' => 6,
                'firstname' => 'Tristan',
                'lastname' => 'Palmer',
                'anniversary' => '2004-02-12',
                'created_at' => '2017-10-03 22:20:34',
                'updated_at' => '2017-10-03 22:20:34',
            ),
        ));
        
        
    }
}