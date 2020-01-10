<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peticion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticion_sociedad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id');
            $table->unsignedBigInteger('usuario_id'); 
            $table->string('estado'); 
           

            $table->timestamps();
            $table->foreign('sociedad_id')->references('id')->on('sociedad');
            $table->foreign('usuario_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peticion');
    }
}
