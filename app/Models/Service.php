<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'slug', 'icon', 'icon_bg', 'title', 'description',
        'features', 'cta_label', 'variant',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
