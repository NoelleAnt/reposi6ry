<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'department',
        'birthday',
        'user_id',  // Foreign key to the User model
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}