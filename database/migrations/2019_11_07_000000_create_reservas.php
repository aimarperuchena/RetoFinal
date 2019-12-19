<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id'); 
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('tipo_id');
            $table->date('fecha');
            $table->integer('personas');
            $table->timestamps();

            $table->foreign('tipo_id')->references('id')->on('tipo_reserva');
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::dropIfExists('reservas');
    }
}
