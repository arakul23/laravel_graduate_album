<?php

namespace Database\Factories;

use App\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "surname" => $this->faker->lastName,
            "patronymic" => $this->faker->lastName,
            "country_id" => rand(1, 242),
            "city_id" => rand(1, 200),
            "faculty_id" => rand(1, 4),
            "department_id" => rand(1, 2)
        ];
    }
}
