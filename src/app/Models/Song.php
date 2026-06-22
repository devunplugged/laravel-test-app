<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function files(): HasMany
    {
        return $this->hasMany(SongFile::class);
    }
}
