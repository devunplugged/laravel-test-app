<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'bio',
    ];

    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class, 'artist_song');
    }
    
}
