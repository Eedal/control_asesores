<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        'id', 
        'name', 
        'department',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
