<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //public $timestamps = false;

    protected $fillable = [
        'producto_recarga_tigo', 
        'producto_recarga_competencia', 
        'producto_recarga_mayor_venta', 
        'producto_recarga_mayor_venta_tigo_cantidad', 
        'producto_recarga_mayor_venta_claro_cantidad', 
        'producto_recarga_mayor_venta_movistar_cantidad', 
        'producto_recarga_mayor_venta_otros_cantidad', 
        'producto_chip_tigo', 
        'producto_chip_mayor_venta_tigo_cantidad', 
        'producto_chip_mayor_venta_claro_cantidad', 
        'producto_chip_mayor_venta_movistar_cantidad', 
        'producto_chip_mayor_venta_otros_cantidad', 
        'producto_chip_competencia', 
        'producto_chip_mayor_venta', 
        'producto_portabilidad_mayor_venta', 
        'producto_portabilidad_mayor_venta_tigo_cantidad', 
        'producto_portabilidad_mayor_venta_claro_cantidad', 
        'producto_portabilidad_mayor_venta_movistar_cantidad', 
        'producto_portabilidad_mayor_otros_tigo_cantidad', 
    ];
}
