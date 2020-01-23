<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRdbtMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdbt_marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rdbtnombre')->unique();
            $table->string('rdbtdescripcion');
            // $table->string('descripcion');
            //el campo debe ir en singular y la tabla en plural
          // $table->integer('rdbt_equipo_id')->unsigned();
            //$table->foreign('rdbt_equipo_id')->references('id')->on('rdbt_equipos');
            
            $table->softDeletes();
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
        Schema::dropIfExists('rdbt_marcas');
    }
}
