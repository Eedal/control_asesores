<?php

namespace App\Imports;

use App\Circuit;
use Exception;
use Maatwebsite\Excel\Concerns\ToModel;

class CircuitsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //si el circuito con tal nombre no existe entonces la consulta dispara una excepcion porque no
        //existe, y lo caturo en el catch y lo inserto
        try{
            Circuit::where('name', $row[5])->first()->id;

        }catch(Exception $e){
            return new Circuit([
                'name' => $row[5],
            ]);
        }

        
    }
}
