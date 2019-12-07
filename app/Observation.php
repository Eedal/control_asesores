<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    //public $timestamps = false;

    protected $fillable = [
        'observaciones',
    ];
    public function audit(){
        return $this->hasOne(Audit::class);
    }
}
