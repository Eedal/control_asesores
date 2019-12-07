<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    //public $timestamps = false;

    protected $fillable = [
        'id', 
        'name', 
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function point_sales(){
        return $this->hasMany(Point_sale::class);
    }
} 
