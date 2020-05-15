<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Musician;
use Faker\Generator as Faker;

$factory->define(Musician::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' =>$faker->text,
        //
    ];
});
