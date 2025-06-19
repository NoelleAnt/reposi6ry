<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'user_name' => $this->faker->unique()->userName,
            'password' => bcrypt('password'), // Default password
            'registration_date' => $this->faker->date,
            'role_id' => \App\Models\Role::factory(), // Creates a role for the user
        ];
    }
}
