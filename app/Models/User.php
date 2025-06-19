<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'password',
        'registration_date',
        'role_id',  // Foreign key to the Role model
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
}