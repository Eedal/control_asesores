<?php

use Illuminate\Database\Seeder;
use App\Supervisor;

class SupervisorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Supervisor::class, 5)->create();
    }
}
