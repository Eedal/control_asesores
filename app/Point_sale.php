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

    public function circuit(){
        return $this->belongsTo(Circuit::class);
    }
    public function audits(){
        return $this->hasMany(Audit::class);
    }
} 
