<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    protected $model = Schedule::class;

    public function definition()
    {
        return [
            'day_of_week' => $this->faker->dayOfWeek,
            'time_slot' => $this->faker->time,
            'room' => $this->faker->word,
            'term' => $this->faker->word,
        ];
    }
}