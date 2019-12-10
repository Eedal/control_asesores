<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 'usuario', 'password', 'codigo_supervisor', 'nombre', 'email', 'phone', 'rol_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class);
        //return $this->hasOne('App\Rol', 'id', 'rol_id');
    }

    public function audits(){
        return $this->hasMany(Audit::class);
    }
    
    /*public function circuits(){
        return $this->hasMany(Circuit::class);
    }*/

    public function circuits(){
        return $this->belongsToMany(Circuit::class);
    }

    public function zones(){
        return $this->hasMany(Zone::class);
    }
}
