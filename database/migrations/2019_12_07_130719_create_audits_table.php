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

            $table->unsignedBigInteger('point_sale_id')->nullable();
            $table->foreign('point_sale_id')->references('id')->on('point_sales')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->nullable();

            $table->unsignedBigInteger('basic_routine_id')->nullable();
            $table->foreign('basic_routine_id')->references('id')->on('basic_routines')->nullable();

            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->nullable();

            $table->unsignedBigInteger('platform_id')->nullable();
            $table->foreign('platform_id')->references('id')->on('platforms')->nullable();

            $table->unsignedBigInteger('visibility_id')->nullable();
            $table->foreign('visibility_id')->references('id')->on('visibilities')->nullable();

            $table->unsignedBigInteger('training_id')->nullable();
            $table->foreign('training_id')->references('id')->on('trainings')->nullable();

            $table->unsignedBigInteger('another_factor_id')->nullable();
            $table->foreign('another_factor_id')->references('id')->on('another_factors')->nullable();

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
