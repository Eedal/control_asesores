<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->dateTime('create_date')->nullable();


            //$table->integer('point_sale_id')->unsigned();
            //$table->foreign('point_sale_id')->references('id')->on('point_sales');
            
            $table->unsignedBigInteger('point_sale_id')->nullable();
            $table->foreign('point_sale_id')->references('id')->on('point_sales')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->nullable();
    

            /*$table->Boolean('sticker')->nullable(); 
            $table->Boolean('cumple_frecuencia')->nullable();
            $table->Boolean('dms')->nullable();*/

            $table->unsignedBigInteger('basic_routine_id')->nullable();
            $table->foreign('basic_routine_id')->references('id')->on('basic_routines')->nullable();

            
            /*$table->Boolean('producto_recarga_tigo')->nullable();
            $table->Boolean('producto_recarga_competencia')->nullable();

            $table->integer('producto_recarga_mayor_venta')->nullable();
            $table->integer('producto_recarga_mayor_venta_tigo_cantidad')->nullable();
            $table->integer('producto_recarga_mayor_venta_claro_cantidad')->nullable();
            $table->integer('producto_recarga_mayor_venta_movistar_cantidad')->nullable();
            $table->integer('producto_recarga_mayor_venta_otros_cantidad')->nullable();
            



            $table->Boolean('producto_chip_tigo')->nullable();
            $table->Boolean('producto_chip_competencia')->nullable();
            $table->integer('producto_chip_mayor_venta')->nullable();
            $table->integer('producto_chip_mayor_venta_tigo_cantidad')->nullable();
            $table->integer('producto_chip_mayor_venta_claro_cantidad')->nullable();
            $table->integer('producto_chip_mayor_venta_movistar_cantidad')->nullable();
            $table->integer('producto_chip_mayor_venta_otros_cantidad')->nullable();
            
            
            

            
            $table->integer('producto_portabilidad_mayor_venta')->nullable();
            $table->integer('producto_portabilidad_mayor_venta_tigo_cantidad')->nullable();
            $table->integer('producto_portabilidad_mayor_venta_claro_cantidad')->nullable();
            $table->integer('producto_portabilidad_mayor_venta_movistar_cantidad')->nullable();
            $table->integer('producto_portabilidad_mayor_otros_tigo_cantidad')->nullable();
            */
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->nullable();


            /*$table->Boolean('recarga_o_paquete')->nullable();
            $table->Boolean('activador_chip')->nullable();
            $table->Boolean('reportes')->nullable();

            $table->Boolean('tigo_shop')->nullable();
            $table->Boolean('tigo_trainer')->nullable();
            */
            $table->unsignedBigInteger('platform_id')->nullable();
            $table->foreign('platform_id')->references('id')->on('platforms')->nullable();


            /*$table->Boolean('estado')->nullable();
            $table->Boolean('vigencia')->nullable();
            $table->Boolean('posicion')->nullable();
            $table->Boolean('asociacion')->nullable();
            $table->Boolean('r_visual_o_primera_posicion')->nullable();
            */
            $table->unsignedBigInteger('visibility_id')->nullable();
            $table->foreign('visibility_id')->references('id')->on('visibilities')->nullable();


            /*$table->Boolean('oferta_prepago')->nullable();
            $table->Boolean('oferta_pospago')->nullable();
            $table->Boolean('portabilidad_prepago_o_pospago')->nullable();
            $table->Boolean('paq_focos')->nullable();
            */
            $table->unsignedBigInteger('training_id')->nullable();
            $table->foreign('training_id')->references('id')->on('trainings')->nullable();


            /*$table->Boolean('conoce_incentivos')->nullable();
            $table->integer('otros_factores_recibe_comisiones')->nullable();
            $table->Boolean('estado_de_la_red')->nullable();
            */
            $table->unsignedBigInteger('another_factor_id')->nullable();
            $table->foreign('another_factor_id')->references('id')->on('another_factors')->nullable();


            //$table->text('observaciones')->nullable();
            $table->unsignedBigInteger('observation_id')->nullable();
            $table->foreign('observation_id')->references('id')->on('observations')->nullable();

            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audits');
    }
}
