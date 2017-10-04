<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ghislain Girard',
                'email' => 'ghischa@gmail.com',
                'password' => '$2y$10$uvAjklVF8cLlSvRkJPkOteXsIzqg/Xpyi6u3SgxQk2acWQCYt.tIe',
                'remember_token' => NULL,
                'created_at' => '2017-09-29 13:21:39',
                'updated_at' => '2017-09-29 13:21:39',
            ),
        ));
        
        
    }
}