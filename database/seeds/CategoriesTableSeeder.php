<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Generator as Faker;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create();
        //
    }
}
