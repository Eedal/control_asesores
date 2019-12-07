<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->Boolean('producto_recarga_tigo')->nullable();
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
