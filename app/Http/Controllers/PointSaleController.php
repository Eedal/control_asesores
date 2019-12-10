<?php

namespace App\Http\Controllers;

use App\Point_sale;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Point_salesImport;
use App\Circuit;
use App\User;
class PointSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Circuit::where('name', 'Fugiat at quia.')->first()->id;
        //$usuario = User::findOrFail(2);
        //return $usuario->circuits;

        $user = User::findOrFail(1);
        
        //return $user->circuits()->attach(2); //adjuntarle un circuito a un usuario
        //return $user->circuits()->detach(2); //quitarle un circuito a un usuario
        //$user->circuits()->sync(2); //para asegurarse que la misma asignacion no se repita una y otra vez

        return $user->circuits;
        $CAMPOS_BASICOS = array(
            "ID" => "ID",
            "Name" => "Name",
        );
        $puntos = Point_sale::all();

        return view('punto_venta.index', compact(['CAMPOS_BASICOS', 'puntos']));
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
     * @param  \App\Point_sale  $point_sale
     * @return \Illuminate\Http\Response
     */
    public function show(Point_sale $point_sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Point_sale  $point_sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Point_sale $point_sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Point_sale  $point_sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Point_sale $point_sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Point_sale  $point_sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Point_sale $point_sale)
    {
        //
    }

    public function importPoint_salesExcel(Request $request)
    {
        $file = $request->file('filePoint_sale');
        Excel::import(new Point_salesImport, $file);

        return back()->with('message', 'Importacion de r point completada ');
    }
}
