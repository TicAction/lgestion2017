<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BehaviorsTableSeeder::class);
        $this->call(KidsTableSeeder::class);
        $this->call(BehaviorKidTableSeeder::class);
        $this->call(KidUserTableSeeder::class);
    }
}
