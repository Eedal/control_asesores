<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'id', 
        'nombre', 
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
 