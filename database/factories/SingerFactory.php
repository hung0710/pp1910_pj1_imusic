<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Singer;
use Faker\Generator as Faker;

$factory->define(Singer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' =>$faker->text,
        //
    ];
});
