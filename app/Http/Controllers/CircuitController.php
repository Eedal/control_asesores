<?php

namespace App\Http\Controllers;

use App\Circuit;
use Illuminate\Http\Request;
use App\User;
use Exception;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CircuitsImport;

class CircuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $circuitos = Circuit::all();
        $CAMPOS_CIRCUITO = array(
            'id' => 'id',
            'name' => 'name',
        );

        return view('user.show_circuits', compact('circuitos', 'CAMPOS_CIRCUITO'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Circuit  $circuit
     * @return \Illuminate\Http\Response
     */
    public function show(Circuit $circuit, $id)
    {
        $circuito = Circuit::find($id);
        //return $zona->user_id;
        /*try{
            $supervisor = User::where('id', $zona->user_id)->first()->nombre;
        }catch(Exception $e){
            $supervisor = "No tiene";
        }*/
        //tengo que obtener los supervisores y las zonas asociadas a este circuito 
        //return $supervisor->nombre;
        $asesor_pda = "No tiene";
        $asesor_pdv = "No tiene";
        try{
            $asesores = $circuito->users;
            //return count($asesores);
            //return $asesores[1];
            
            for($i=0; $i<count($asesores); $i++){
                if($asesores[$i]->rol_id == 5){
                    $asesor_pda = $asesores[$i]->nombre;
                }elseif($asesores[$i]->rol_id == 6){
                    $asesor_pdv = $asesores[$i]->nombre;
                }
            }
            
        }catch(Exception $e){
            
        }
        
        //return $asesor_pdv->nombre;
        return view('user.show_circuit', compact(['circuito', 'asesor_pdv', 'asesor_pda']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Circuit  $circuit
     * @return \Illuminate\Http\Response
     */
    public function edit(Circuit $circuit, $id)
    {
        $circuito = Circuit::find($id);
        $asesor_pda = "No tiene";
        $asesor_pdv = "No tiene";
        try{
            $asesores = $circuito->users;
            
            //return count($asesores);
            //return $asesores[1];
            
            for($i=0; $i<count($asesores); $i++){
                if($asesores[$i]->rol_id == 5){
                    $asesor_pda = $asesores[$i]->nombre;
                }elseif($asesores[$i]->rol_id == 6){
                    $asesor_pdv = $asesores[$i]->nombre;
                }
            }
        }catch(Exception $e){
            

        }
        
        
        
        $id_de_los_asesores_pda = 5;
        $asesores_pda = User::where('rol_id', $id_de_los_asesores_pda)->get();

        $id_de_los_asesores_pdv = 6;
        $asesores_pdv = User::where('rol_id', $id_de_los_asesores_pdv)->get();

        return view('user.edit_circuit', compact(['circuito', 'asesor_pdv', 'asesor_pda', 'asesores_pdv', 'asesores_pda']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Circuit  $circuit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Circuit $circuit, $id)
    {
        $circuito = Circuit::find($id);
        $circuito->users()->attach($request->asesor_pda);
        $circuito->users()->sync($request->asesor_pdv);
        //$circuito->users()->attach($request->asesor_pdv);
        //return $request->asesor_pda . "<br>" . $request->asesor_pdv;

        

        
        //Falta poder actualizar bieeeeeeeeeeeeeeeeeeeeen
        //$circuito->users()->attach(3);
        //$circuito->users()->sync(2);
        return "hola";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Circuit  $circuit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Circuit $circuit)
    {
        //
    }

    public function importCircuitsExcel(Request $request){
        $file = $request->file('fileCircuits');
        Excel::import(new CircuitsImport, $file);

        return back()->with('message', 'Importacion de r point completada ');
    }
}
