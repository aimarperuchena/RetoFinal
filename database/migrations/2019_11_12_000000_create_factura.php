<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id');
            $table->unsignedBigInteger('reserva_id'); 
            $table->date('fecha');
            $table->integer('personas');
            $table->double('importe');
            $table->timestamps();
            $table->foreign('reserva_id')->references('id')->on('reserva');
            $table->foreign('sociedad_id')->references('id')->on('sociedad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
