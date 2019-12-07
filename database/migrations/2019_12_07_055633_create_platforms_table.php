<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('platforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->Boolean('recarga_o_paquete')->nullable();
            $table->Boolean('activador_chip')->nullable();
            $table->Boolean('reportes')->nullable();

            $table->Boolean('tigo_shop')->nullable();
            $table->Boolean('tigo_trainer')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platforms');
    }
}
