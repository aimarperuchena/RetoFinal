<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeticionNuevaSociedad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('peticion_nueva_sociedad', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('nombre');
             $table->string('ubicacion');
             $table->integer('telefono');
             $table->text('descripcion');
             $table->string('estado');
             $table->string('link_plano');
             $table->unsignedBigInteger('user_id');
             $table->softDeletes();
             $table->timestamps();

             $table->foreign('user_id')->references('id')->on('users');

         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('peticion_nueva_sociedad');
    }
}
