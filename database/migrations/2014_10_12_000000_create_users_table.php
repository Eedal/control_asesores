<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('cedula');
            $table->string('usuario')->nullable();
            $table->string('password', 45)->nullable();
            $table->string('codigo_supervisor')->default(0);
            $table->string('nombre', 45)->nullable();
            $table->string('email')->unique();
            $table->string('phone');



            $table->unsignedBigInteger('rol_id')->nullable();
            $table->foreign('rol_id')->references('id')->on('rols')->nullable();

            


                
                
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
