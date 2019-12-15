<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_sales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->bigIncrements('id');
            $table->integer('code')->nullable();
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('channel')->nullable();
            $table->string('type')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('cell_phone')->nullable();
            $table->string('owner')->nullable();
            $table->string('document_type')->nullable();
            $table->string('document')->nullable();
            $table->string('schedule')->nullable();
            $table->string('department')->nullable();
            $table->string('city')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('address')->nullable();

            




            $table->string('circuit')->nullable();

            $table->unsignedBigInteger('circuit_id')->nullable();
            $table->foreign('circuit_id')->references('id')->on('circuits')->nullable();

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
        Schema::dropIfExists('point_sales');
    }
}
