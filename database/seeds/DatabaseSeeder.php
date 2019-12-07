<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AuditsTableSeeder::class);
        $this->call(CircuitsTableSeeder::class);

        $this->call(Point_salesTableSeeder::class);
        $this->call(SupervisorsTableSeeder::class);


    }
}
