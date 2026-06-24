<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Series extends Model
{
    protected $fillable = [
        'title',
        'description',
        'release_year',
        'genre',
    ];

    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }
}