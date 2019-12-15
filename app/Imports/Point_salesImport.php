<?php

namespace App\Imports;

use App\Point_sale;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Circuit;
use App\Rol;
use Exception;
class Point_salesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
            //capturar los id de los circuitos
            try{
                $id_de_el_circuito = Circuit::where('name', $row[5])->first()->id;
            }catch(Exception $e){
                $id_de_el_circuito = null;
            }
            
            
            //$a = array("adasd", "asdasd", "asfasf");
            
            //dd($id_de_el_circuito);




            return new Point_sale([ 
                'code' => $row[0],
                'name' => $row[1],
                'status' => $row[2],

                
                'channel' => $row[3],
                'type' => $row[4],
                'circuit' => $row[5],

                'phone' => $row[8],
                'cell_phone' => $row[9],
                'owner' => $row[10],
                'document_type' => $row[11],
                'document' => $row[12],
                'schedule' => $row[13],
                'department' => $row[15],
                'city' => $row[16],
                'neighborhood' => $row[17],
                'address' => $row[18],

                'circuit_id' => $id_de_el_circuito,
                
            ]);
        

        
    }
}
