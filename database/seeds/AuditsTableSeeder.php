<?php

use Illuminate\Database\Seeder;
use App\Audit;


class AuditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Audit::class, 100)->create();
    }
}
