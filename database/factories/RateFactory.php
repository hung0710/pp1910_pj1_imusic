<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Rate;
use Faker\Generator as Faker;

$factory->define(Rate::class, function (Faker $faker) {
    return [
        'point' =>$faker->numberBetween('1', '10'),
        'song_id' => App\Models\Song::all()->random()->id,
        'user_id' => App\Models\User::all()->random()->id,
        //
    ];
});
