<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point_sale extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'name', 
    ];
}
