<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongFileType extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'code',
        'label',
    ];

}