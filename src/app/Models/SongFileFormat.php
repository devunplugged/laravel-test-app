<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongFileFormat extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'code',
        'label',
    ];

}