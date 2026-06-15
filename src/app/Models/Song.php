<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
    protected $fillable = [
        'title',
        'duration_seconds',
    ];

    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class, 'song_contributors');
    }

    // public function formats(): HasMany
    // {
    //     return $this->hasMany(SongFormat::class);
    // }
}
