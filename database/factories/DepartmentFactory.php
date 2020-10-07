<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Faculty;
use Faker\Generator as Faker;

$factory->define(\App\Department::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "photo" => "/public/img/noimg.jpg",
        "id_faculty" => Faculty::all()->random()->id,
    ];
});
