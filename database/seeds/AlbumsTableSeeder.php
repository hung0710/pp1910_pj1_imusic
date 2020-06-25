<?php

use Illuminate\Database\Seeder;
use App\Models\Album;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            ['name' => 'Bài hát hay tháng 1', 'url' => '/img/năng.jpg' ],
            ['name' => 'Bài hát hay tháng 2', 'url' => '/img/anh_dep_viet_nam_2.jpg' ],
            ['name' => 'Bài hát hay tháng 3', 'url' => '/img/hoa-sen.jpg' ],
            ['name' => 'Thất tình', 'url' => '/img/mưa.jpg' ],
            ['name' => 'Mưa', 'url' => '/img/mưa.jpg' ],
            ['name' => 'Cover', 'url' => '/img/mưa.jpg' ],
        ]);
        //
    }
}
