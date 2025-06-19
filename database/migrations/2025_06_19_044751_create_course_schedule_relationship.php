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
        Schema::table('schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id')->after('id'); // Add course_id column after id
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); // Foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropForeign(['course_id']); // Drop foreign key constraint
            $table->dropColumn('course_id'); // Drop course_id column
        });
    }
};
// This migration creates a foreign key relationship between the 'schedules' table and the 'courses' table.