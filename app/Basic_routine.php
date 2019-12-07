<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic_routine extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'sticker', 
        'cumple_frecuencia', 
        'dms',  
    ];
}
