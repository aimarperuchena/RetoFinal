<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociedadUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sociedad_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id');
            $table->unsignedBigInteger('user_id');
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('sociedad_id')->references('id')->on('sociedad');

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
        Schema::dropIfExists('sociedad_user');
    }
}
