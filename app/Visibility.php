<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visibility extends Model
{
    //public $timestamps = false;

    protected $fillable = [
        'estado', 
        'vigencia', 
        'posicion', 
        'asociacion', 
        'r_visual_o_primera_posicion',
    ];
    public function audit(){
        return $this->hasOne(Audit::class);
    }
}
