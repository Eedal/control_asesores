<?php

namespace App\Imports;

use App\Point_sale;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Circuit;
use App\Rol;
class Point_salesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
            
            return new Point_sale([
                'id' => $row[2],
                'name' => $row[1],
                'circuit_id' => 350814,
            ]);
        

        
    }
}
