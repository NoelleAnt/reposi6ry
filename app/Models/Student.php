<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'program',
        'enrollment_year',
        'birthday',
        'user_id',  // Foreign key to the User model
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student'); // Assuming a pivot table
    }
}