<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point_sale extends Model
{
    //public $timestamps = false;

    protected $fillable = [
        'id', 
        'code',
        'name',
        'status',
        'channel',
        'type',
        'phone',
        'cell_phone',
        'owner',
        'document_type',
        'document',
        'schedule',
        'department',
        'city',
        'neighborhood',
        'address',
        'circuit',
        'circuit_id'
    ];

    public function circuit(){
        return $this->belongsTo(Circuit::class);
    }

    public function audits(){
        return $this->hasMany(Audit::class);
    }
} 
