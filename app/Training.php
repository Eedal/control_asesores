<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'oferta_prepago', 
        'oferta_pospago', 
        'portabilidad_prepago_o_pospago', 
        'paq_focos', 
    ];
}
