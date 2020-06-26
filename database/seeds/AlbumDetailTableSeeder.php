<?php

use Illuminate\Database\Seeder;
use App\Models\AlbumDetail;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class AlbumDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album_detail')->insert([
            ['album_id' => '1', 'song_id' => '1' ],
            ['album_id' => '1', 'song_id' => '12' ],
            ['album_id' => '1', 'song_id' => '14' ],
            ['album_id' => '1', 'song_id' => '5' ],
            ['album_id' => '1', 'song_id' => '2' ],
            ['album_id' => '1', 'song_id' => '3' ],
            ['album_id' => '2', 'song_id' => '4' ],
            ['album_id' => '3', 'song_id' => '5' ],
            ['album_id' => '4', 'song_id' => '6' ],
            ['album_id' => '5', 'song_id' => '7' ],
            ['album_id' => '6', 'song_id' => '8' ],
            ['album_id' => '2', 'song_id' => '10' ],
            ['album_id' => '3', 'song_id' => '11' ],
            ['album_id' => '4', 'song_id' => '12' ],
            ['album_id' => '5', 'song_id' => '13' ],
            ['album_id' => '6', 'song_id' => '14' ],
        ]);
        //
    }
}
