<?php

use App\Entities\Driver;
use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::truncate();
        factory(Driver::class, 3)->create();
    }
}
