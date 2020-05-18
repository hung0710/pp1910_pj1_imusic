<?php

use Illuminate\Database\Seeder;
use App\Models\Song;
use Faker\Generator as Faker;
class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Song::class, 30)->create();
        //
    }
}
