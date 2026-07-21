<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'slug', 'category', 'filter', 'title', 'description',
        'image', 'cta_label', 'featured', 'layout',
    ];
}
