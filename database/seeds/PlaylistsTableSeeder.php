<?php

use Illuminate\Database\Seeder;
use App\Models\Playlist;
use Faker\Generator as Faker;
class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Playlist::class, 10)->create();
        //
    }
}
