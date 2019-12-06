<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'create_date', 'sticker', 'cumple_frecuencia', 'dms', 'producto_recarga_tigo', 'producto_recarga_competencia', 'producto_recarga_mayor_venta', 'producto_chip_tigo', 'producto_chip_competencia', 'producto_chip_mayor_venta', 'producto_portabilidad_mayor_venta', 'recarga_o_paquete', 'activador_chip', 'reportes', 'tigo_shop', 'tigo_trainer', 'estado', 'vigencia', 'posicion', 'asociacion', 'r_visual_o_primera_posicion', 'oferta_prepago', 'oferta_pospago', 'portabilidad_prepago_o_pospago', 'paq_focos', 'conoce_incentivos', 'otros_factores_recibe_comisiones', 'estado_de_la_red', 'observaciones',
    ];
}
