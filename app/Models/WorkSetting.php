<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkSetting extends Model
{
    protected $guarded = [];

    public static function getSingleton(): static
    {
        return static::firstOrCreate(['id' => 1]);
    }
}
