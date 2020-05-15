<?php

use Illuminate\Database\Seeder;
use App\Models\Album;
use Faker\Generator as Faker;
class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Album::class, 10)->create();
        //
    }
}
