<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SongContributors extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'artist_id',
        'song_id',
        'artist_role_id',
    ];

    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class, 'song_contributors');
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(ArtistRole::class);
    }

}
