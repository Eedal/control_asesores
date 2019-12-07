<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('basic_routines', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            
            $table->Boolean('sticker')->nullable(); 
            $table->Boolean('cumple_frecuencia')->nullable();
            $table->Boolean('dms')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basic_routines');
    }
}
