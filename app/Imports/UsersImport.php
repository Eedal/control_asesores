<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    { 
        
        return new User([
            'cedula' => $row[0],
            'usuario' => $row[1],
            'password' => $row[2],
            'codigo_supervisor' => $row[3],
            'nombre' => $row[4],
            'email' => $row[5],
            'phone' => $row[6],
            'rol_id' => $row[7],
        ]); 
    }
}
