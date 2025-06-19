<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'program' => $this->faker->word,
            'enrollment_year' => $this->faker->year,
            'birthday' => $this->faker->date,
            'user_id' => \App\Models\User::factory(), // Creates a user for the student
        ];
    }
}