<?php

use Illuminate\Database\Seeder;

class ReportsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ReportsData::class, 10000)->create();
    }
}
