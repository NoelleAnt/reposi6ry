<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition()
{
    $roles = [
        ['role_name' => 'Student', 'description' => 'A user who is enrolled in courses.'],
        ['role_name' => 'Teacher', 'description' => 'A user who teaches courses.'],
        ['role_name' => 'Admin', 'description' => 'A user who manages the platform.'],
        // Add more roles as needed
    ];

    return $roles[array_rand($roles)];
}
}