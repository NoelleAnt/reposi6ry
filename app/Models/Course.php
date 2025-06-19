<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'subject',
        'course_code',
        'credits',
        'description',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student'); // Assuming a pivot table
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}