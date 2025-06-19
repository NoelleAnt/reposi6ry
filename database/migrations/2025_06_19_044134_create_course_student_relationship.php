<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id'); // Foreign key for courses
            $table->unsignedBigInteger('student_id'); // Foreign key for students
            
            // Setting up foreign key constraints
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); // If a course is deleted, remove related entries
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade'); // If a student is deleted, remove related entries
            
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_student'); // Drop the pivot table
    }
};