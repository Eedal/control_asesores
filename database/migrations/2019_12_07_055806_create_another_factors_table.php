<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnotherFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('another_factors', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->Boolean('conoce_incentivos')->nullable();
            $table->integer('otros_factores_recibe_comisiones')->nullable();
            $table->Boolean('estado_de_la_red')->nullable();
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
        Schema::dropIfExists('another_factors');
    }
}
