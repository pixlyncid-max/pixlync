<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'category', 'title', 'excerpt', 'image',
        'published_at', 'read_time', 'author', 'is_featured',
    ];

    protected $casts = [
        'published_at' => 'date',
        'is_featured' => 'boolean',
    ];
}
