<?php

use Illuminate\Database\Seeder;
use App\Models\Rate;
use Faker\Generator as Faker;
class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rate::class, 30)->create();
        //
    }
}
