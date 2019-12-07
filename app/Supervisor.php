<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'identification_card',
        'name', 
    ];
}
