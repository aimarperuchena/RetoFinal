<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id');
            $table->unsignedBigInteger('producto_sociedad_id'); 
            $table->unsignedBigInteger('factura_id'); 
            $table->double('importe');
            $table->integer('unidades');
            $table->softDeletes();

            $table->timestamps();
            $table->foreign('sociedad_id')->references('id')->on('sociedad');
            $table->foreign('producto_sociedad_id')->references('id')->on('productos_sociedad');
            $table->foreign('factura_id')->references('id')->on('factura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineas');
    }
}
