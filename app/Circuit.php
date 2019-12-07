<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'name', 
    ];
}
