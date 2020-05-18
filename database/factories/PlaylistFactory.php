<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Playlist;
use Faker\Generator as Faker;

$factory->define(Playlist::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' =>$faker->text,
        'category_id' => App\Models\Category::all()->random()->id,
        'type' => $faker->word,
        'view' => $faker->numberBetween('1000', '10000'),
    ];
});
