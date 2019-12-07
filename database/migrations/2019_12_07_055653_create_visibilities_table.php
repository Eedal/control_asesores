<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisibilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visibilities', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->nullable();

            $table->unsignedBigInteger('point_sale_id')->nullable();
            $table->foreign('point_sale_id')->references('id')->on('point_sales')->nullable();

            $table->Boolean('estado')->nullable();
            $table->Boolean('vigencia')->nullable();
            $table->Boolean('posicion')->nullable();
            $table->Boolean('asociacion')->nullable();
            $table->Boolean('r_visual_o_primera_posicion')->nullable();
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
        Schema::dropIfExists('visibilities');
    }
}
