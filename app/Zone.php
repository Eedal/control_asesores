<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        'id', 
        'nombre', 
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
