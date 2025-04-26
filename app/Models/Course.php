<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'level',
        'duration',
        'price',
        'image',
        'user_id',
        'status'
    ];

    protected $casts = [
        'price' => 'float',
        'duration' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
} 