<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Define the fixed roles
        $fixedRoles = [
            ['role_name' => 'Student', 'description' => 'A user who is enrolled in courses.'],
            ['role_name' => 'Teacher', 'description' => 'A user who teaches courses.'],
            ['role_name' => 'Admin', 'description' => 'A user who manages the platform.'],
        ];

        // Create fixed roles
        foreach ($fixedRoles as $role) {
            Role::create($role);
        }
    }
}