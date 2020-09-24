<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "surname" => $faker->lastName,
        "patronymic" => $faker->lastName,
        "id_country" => rand(1, 242),
        "id_city" => rand(1, 200),
        "id_faculty" => rand(1, 4),
        "id_department" => rand(1, 2)
    ];
});
