<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    $status = [
        'approved',
        'not approved',
    ];
    return [
        'name' =>$faker->word,
        'lyrics' =>$faker->text,
        'category_id' => App\Models\Category::all()->random()->id,
        'singer_id' => App\Models\Singer::all()->random()->id,
        'musician_id' => App\Models\Musician::all()->random()->id,
        'view' => $faker->numberBetween('1000', '10000'),
        'status' => $faker->randomElement($status),
        //
    ];
});
