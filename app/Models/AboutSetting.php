<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    protected $guarded = [];

    /**
     * Always return the first (and only) settings row,
     * creating it with defaults if it doesn't exist yet.
     */
    public static function getSingleton(): static
    {
        return static::firstOrCreate(['id' => 1]);
    }
}
