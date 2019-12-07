<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    //public $timestamps = false;

    protected $fillable = [
        'recarga_o_paquete', 
        'activador_chip', 
        'reportes', 
        'tigo_shop', 
        'tigo_trainer', 
    ];
    public function audit(){
        return $this->hasOne(Audit::class);
    }
}
