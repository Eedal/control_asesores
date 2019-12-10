<?php

namespace App\Imports;

use App\Rol;
use Maatwebsite\Excel\Concerns\ToModel;

class RolsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rol([
            'nombre' => $row[0],
        ]);
    }
}
