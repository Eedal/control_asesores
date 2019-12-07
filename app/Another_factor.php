<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Another_factor extends Model
{
    //public $timestamps = false;

    protected $fillable = [
        'conoce_incentivos', 
        'otros_factores_recibe_comisiones', 
        'estado_de_la_red',  
    ];
}
