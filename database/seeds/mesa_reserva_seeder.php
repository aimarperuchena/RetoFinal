<?php

use Illuminate\Database\Seeder;

class mesa_reserva_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /*
      Schema::create('mesa_reserva', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reserva_id'); 
            $table->unsignedBigInteger('mesa_id'); 

            $table->timestamps();
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->foreign('mesa_id')->references('id')->on('mesas');


        });
     */
    public function run()
    {
     
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '1',
            'reserva_id'=>'1',   
        ]);
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '2',
            'reserva_id'=>'1',    
        ]);
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '1',
            'reserva_id'=>'2',   
        ]);
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '2',
            'reserva_id'=>'2', 
        ]);
    }
}
