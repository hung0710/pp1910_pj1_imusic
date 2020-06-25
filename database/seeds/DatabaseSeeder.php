<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(AlbumDetailTableSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
