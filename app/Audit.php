<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    //public $timestamps = false;

    protected $fillable = [
        'point_sale_id',
        'user_id',
        'basic_routine_id',
        'product_id',
        'platform_id',
        'visibility_id',
        'training_id',
        'another_factor_id',
        'observation_id',
        
        /*'create_date', 
        'sticker', 
        'cumple_frecuencia', 
        'dms', 
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
        'recarga_o_paquete', 
        'activador_chip', 
        'reportes', 
        'tigo_shop', 
        'tigo_trainer', 
        'estado', 
        'vigencia', 
        'posicion', 
        'asociacion', 
        'r_visual_o_primera_posicion', 
        'oferta_prepago', 
        'oferta_pospago', 
        'portabilidad_prepago_o_pospago', 
        'paq_focos', 
        'conoce_incentivos', 
        'otros_factores_recibe_comisiones', 
        'estado_de_la_red',  
        'observaciones',*/
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function point_sale(){
        return $this->belongsTo(Point_sale::class);
    }

    public function basic_routine(){
        return $this->belongsTo(Basic_routine::class);

        //return $this->hasOne(Basic_routine::class);
    }
    
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function platform(){
        return $this->belongsTo(Platform::class);
    }
    
    public function visibility(){
        return $this->belongsTo(Visibility::class);
    }
    
    public function training(){
        return $this->belongsTo(Training::class);
    }
    
    public function another_factor(){
        return $this->belongsTo(Another_factor::class);
    }
    
    public function observation(){
        return $this->belongsTo(Observation::class);
    }
    
     
}
