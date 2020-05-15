<?php

use Illuminate\Database\Seeder;
use App\Models\Musician;
use Faker\Generator as Faker;
class MusiciansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Musician::class, 10)->create();
        //
    }
}
