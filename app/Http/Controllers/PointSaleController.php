<?php

namespace App\Http\Controllers;

use App\Point_sale;
use Illuminate\Http\Request;

class PointSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
}
