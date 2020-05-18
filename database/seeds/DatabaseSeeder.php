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
        $this->call(UsersTableSeeder::class);
        $this->call(SingersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(MusiciansTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(RatesTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(PlaylistsTableSeeder::class);
        $this->call(ListableTableSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
