<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episode extends Model
{
    protected $fillable = [
        'title',
        'episode_number',
        'duration_minutes',
        'series_id',
    ];

    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }
}