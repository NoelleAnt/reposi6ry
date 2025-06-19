<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'subject' => $this->faker->word(50),
            'course_code' => strtoupper($this->faker->word) . '-' . $this->faker->numberBetween(100, 999),
            'credits' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->sentence(255),
        ];
    }
}
