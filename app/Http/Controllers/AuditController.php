<?php

namespace App\Http\Controllers;

use App\Audit;
use Illuminate\Http\Request;

class AuditController extends Controller
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
            "Fecha_creacion" => "Fecha_creacion",
            "Stick" => "Sticker",
            "Frecu" => "Frecuencia",
            "DMS" => "DMS",
            "Recar" => "Recarga",
            "Chip" => "Chip",
            "Portab" => "Portab",

        );
        
        //$auditorias = Audit::all();
        $auditorias = Audit::where("sticker", "1")->orderBy("id", "DESC")->get();
        return view("auditoria.index", compact(['auditorias', 'CAMPOS_BASICOS']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("auditoria.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        /*$validacion = $this->validate(request(),[
            'sticker' => 'required',
            'cumple_frecuencia' => 'required',
            'dms' => 'required',
            'producto_recarga_tigo' => 'required',
        ]);*/

        
        $sticker = ($request->sticker) ? 1:0;
        $cumple_frecuencia = ($request->cumple_frecuencia) ? 1:0;
        $dms = ($request->dms) ? 1:0;
        $producto_recarga_tigo = ($request->producto_recarga_tigo) ? 1:0;
        
        $producto_recarga_competencia = ($request->producto_recarga_competencia) ? 1:0;
        

        $producto_recarga_mayor_venta = $request->producto_recarga_mayor_venta;
        $producto_recarga_mayor_venta_tigo_cantidad = $request->producto_recarga_mayor_venta_tigo_cantidad;
        $producto_recarga_mayor_venta_claro_cantidad = $request->producto_recarga_mayor_venta_claro_cantidad;
        $producto_recarga_mayor_venta_movistar_cantidad = $request->producto_recarga_mayor_venta_movistar_cantidad;
        $producto_recarga_mayor_venta_otros_cantidad = $request->producto_recarga_mayor_venta_otros_cantidad;




        $producto_chip_tigo = ($request->producto_chip_tigo) ? 1:0;
        

        $producto_chip_competencia = ($request->producto_chip_competencia) ? 1:0;
        $producto_chip_mayor_venta_tigo_cantidad = $request->producto_chip_mayor_venta_tigo_cantidad;
        $producto_chip_mayor_venta_claro_cantidad = $request->producto_chip_mayor_venta_claro_cantidad;
        $producto_chip_mayor_venta_movistar_cantidad = $request->producto_chip_mayor_venta_movistar_cantidad;
        $producto_chip_mayor_venta_otros_cantidad = $request->producto_chip_mayor_venta_otros_cantidad;



        $producto_chip_mayor_venta = $request->producto_chip_mayor_venta;

        $producto_portabilidad_mayor_venta = $request->producto_portabilidad_mayor_venta;

        $producto_portabilidad_mayor_venta_tigo_cantidad = $request->producto_portabilidad_mayor_venta_tigo_cantidad;
        $producto_portabilidad_mayor_venta_claro_cantidad = $request->producto_portabilidad_mayor_venta_claro_cantidad;
        $producto_portabilidad_mayor_venta_movistar_cantidad = $request->producto_portabilidad_mayor_venta_movistar_cantidad;
        $producto_portabilidad_mayor_otros_tigo_cantidad = $request->producto_portabilidad_mayor_otros_tigo_cantidad;


        $recarga_o_paquete = ($request->recarga_o_paquete) ? 1:0;
        $activador_chip = ($request->activador_chip) ? 1:0;
        $reportes = ($request->reportes) ? 1:0;
        
        $tigo_shop = ($request->tigo_shop) ? 1:0;
        $tigo_trainer = ($request->tigo_trainer) ? 1:0;



        $estado = ($request->estado) ? 1:0;
        $vigencia = ($request->vigencia) ? 1:0;
        $posicion = ($request->posicion) ? 1:0;
        $asociacion = ($request->asociacion) ? 1:0;
        $r_visual_o_primera_posicion = ($request->r_visual_o_primera_posicion) ? 1:0;

        $oferta_prepago = ($request->oferta_prepago) ? 1:0;
        $oferta_pospago = ($request->oferta_pospago) ? 1:0;
        $portabilidad_prepago_o_pospago = ($request->portabilidad_prepago_o_pospago) ? 1:0;        $portabilidad_prepago_o_pospago = ($request->portabilidad_prepago_o_pospago) ? 1:0;
        $paq_focos = ($request->paq_focos) ? 1:0;

        $conoce_incentivos = ($request->conoce_incentivos) ? 1:0;
        $otros_factores_recibe_comisiones = $request->otros_factores_recibe_comisiones;
        $estado_de_la_red = ($request->estado_de_la_red) ? 1:0;

        $observaciones = $request->observaciones;




        //dd(request());
        //return $producto_recarga_tigo;


        
        $fecha =date('Y-m-d H:i:s');
        Audit::create([
            "create_date" => $fecha,
            "sticker" => $sticker, 
            "cumple_frecuencia" => $cumple_frecuencia, 
            "dms" => $dms,
            "producto_recarga_tigo" => $producto_recarga_tigo,
            "producto_recarga_competencia" => $producto_recarga_competencia,
            "producto_recarga_mayor_venta" => $producto_recarga_mayor_venta,

            "producto_recarga_mayor_venta_tigo_cantidad" => $producto_recarga_mayor_venta_tigo_cantidad,
            "producto_recarga_mayor_venta_claro_cantidad" => $producto_recarga_mayor_venta_claro_cantidad,
            "producto_recarga_mayor_venta_movistar_cantidad" => $producto_recarga_mayor_venta_movistar_cantidad,
            "producto_recarga_mayor_venta_otros_cantidad" => $producto_recarga_mayor_venta_otros_cantidad,

            "producto_chip_tigo" => $producto_chip_tigo,
            "producto_chip_competencia" => $producto_chip_competencia,
            "producto_chip_mayor_venta" => $producto_chip_mayor_venta,
            "producto_chip_mayor_venta_tigo_cantidad" => $producto_chip_mayor_venta_tigo_cantidad,
            "producto_chip_mayor_venta_claro_cantidad" => $producto_chip_mayor_venta_claro_cantidad,
            "producto_chip_mayor_venta_movistar_cantidad" => $producto_chip_mayor_venta_movistar_cantidad,
            "producto_chip_mayor_venta_otros_cantidad" => $producto_chip_mayor_venta_otros_cantidad,

            "producto_portabilidad_mayor_venta" => $producto_portabilidad_mayor_venta,
            "producto_portabilidad_mayor_venta_tigo_cantidad" => $producto_portabilidad_mayor_venta_tigo_cantidad,
            "producto_portabilidad_mayor_venta_claro_cantidad" => $producto_portabilidad_mayor_venta_claro_cantidad,
            "producto_portabilidad_mayor_venta_movistar_cantidad" => $producto_portabilidad_mayor_venta_movistar_cantidad,
            "producto_portabilidad_mayor_otros_tigo_cantidad" => $producto_portabilidad_mayor_otros_tigo_cantidad,


            "recarga_o_paquete" => $recarga_o_paquete,
            "activador_chip" => $activador_chip,
            "reportes" => $reportes,
            "tigo_shop" => $tigo_shop,
            "tigo_trainer" => $tigo_trainer,

            "estado" => $estado,
            "vigencia" => $vigencia,
            "posicion" => $posicion,
            "asociacion" => $asociacion,
            "r_visual_o_primera_posicion" => $r_visual_o_primera_posicion,
            "oferta_prepago" => $oferta_prepago,
            "oferta_pospago" => $oferta_pospago,
            "portabilidad_prepago_o_pospago" => $portabilidad_prepago_o_pospago,
            "paq_focos" => $paq_focos,
            "conoce_incentivos" => $conoce_incentivos,
            "otros_factores_recibe_comisiones" => $otros_factores_recibe_comisiones,
            "estado_de_la_red" => $estado_de_la_red,
            "observaciones" => $observaciones

        ]);

        $CAMPOS_BASICOS = array(
            "ID" => "ID",
            "Fecha_creacion" => "Fecha_creacion",
            "Stick" => "Sticker",
            "Frecu" => "Frecuencia",
            "DMS" => "DMS",
            "Recar" => "Recarga",
            "Chip" => "Chip",
            "Portab" => "Portab",

        );
        
        $auditorias = Audit::all();
        return view("auditoria.index", compact(['auditorias', 'CAMPOS_BASICOS']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Audit  $audit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $CAMPOS_BASICOS = array(
            "ID" => "ID",
            "Fecha_creacion" => "Fecha_creacion",
            "Stick" => "Sticker",
            "Frecu" => "Frecuencia",
            "DMS" => "DMS",
            "Recar" => "Recarga",
            "Chip" => "Chip",
            "Portab" => "Portab",

        );
        $auditoria = Audit::find($id);
        //dd($auditoria->id);
        return view('auditoria.show', compact(['auditoria', 'CAMPOS_BASICOS']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Audit  $audit
     * @return \Illuminate\Http\Response
     */
    public function edit(Audit $audit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Audit  $audit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audit $audit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Audit  $audit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auditoria = Audit::find($id);
        $auditoria->delete();
        
        return back()->with('info', 'La auditoría fue eliminada');
    }
}
