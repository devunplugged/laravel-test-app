<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SongFile extends Model
{
    protected $fillable = [
        'code',
        'label',
    ];

    public function song(): BelongsTo
    {
        return $this->belongsTo(Song::class);
    }

    public function format(): BelongsTo
    {
        return $this->belongsTo(SongFileFormat::class, 'song_file_format_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(SongFileFormat::class, 'song_file_type_id');
    }
}