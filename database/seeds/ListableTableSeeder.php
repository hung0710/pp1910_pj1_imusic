<?php

use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\Singer;
use App\Models\Playlist;
class ListableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $id_songs = DB::table('songs')->pluck('id');

        $id_singers = DB::table('singers')->pluck('id');
        foreach($id_songs as $song_id){
            DB::table('listable')->insert([
                'song_id' =>  $song_id,
                'listable_id' => $faker->randomElement($id_singers),
                'listable_type' => Singer::class,
            ]);
        }

        $id_albums = DB::table('albums')->pluck('id');
        foreach($id_songs as $song_id){
            DB::table('listable')->insert([
                'song_id' => $song_id,
                'listable_id' => $faker->randomElement($id_albums),
                'listable_type' => Album::class,
            ]);
        }

        $id_playlists = DB::table('playlists')->pluck('id');
        foreach($id_songs as $song_id){
            DB::table('listable')->insert([
                'song_id' => $song_id,
                'listable_id' => $faker->randomElement($id_playlists),
                'listable_type' => Playlist::class,
            ]);
        }
        //
    }
}
