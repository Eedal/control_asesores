<?php

use Illuminate\Database\Seeder;
use App\Point_sale;

class Point_salesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Point_sale::class, 5)->create();
        
    }
}
