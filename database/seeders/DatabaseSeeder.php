<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CourseSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            TeacherSeeder::class,
            ScheduleSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
