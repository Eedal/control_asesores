<?php

namespace App\Http\Controllers;

use App\Zone;
use Illuminate\Http\Request;
use App\Http\Requests\ZoneRequest;
use App\User;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonas = Zone::all();
        $CAMPOS_ZONA = array(
            'id' => 'id',
            'name' => 'name',
            'department' => 'department',
        );

        return view('user.show_zones', compact('zonas', 'CAMPOS_ZONA'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_de_los_supervisores = 3;
        $supervisores = User::where('rol_id', $id_de_los_supervisores)->get();
        return view('user.create_zone', compact('supervisores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ZoneRequest $request)
    {   
        
        //return $request;
        $zone = new Zone;
        $zone->department = $request->department;
        $zone->name = $request->name;
        $zone->user_id = $request->codigo_supervisor;

        $zone->save();
        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        //
    }
}
