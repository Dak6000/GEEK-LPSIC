<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'profile_image',
        'title',
        'specialties',
        'experience',
        'mentoring_approach',
        'availability',
        'hours',
        'hourly_rate',
        'status'
    ];

    protected $casts = [
        'availability' => 'array',
        'hourly_rate' => 'float'
    ];
} 