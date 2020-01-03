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
     //RESERVA 1 SOCIEDAD 1
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '1',
            'reserva_id'=>'1',   
        ]);

        //RESERVA 2 SOCIEDAD 1
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '2',
            'reserva_id'=>'2',   
        ]);

        //RESERVA 3 SOCIEDAD 2
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '4',
            'reserva_id'=>'3',   
        ]);

        //RESERVA 4 SOCIEDAD 2
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '5',
            'reserva_id'=>'4',   
        ]);

        //RESERVA 5 SOCIEDAD 3
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '7',
            'reserva_id'=>'5',   
        ]);

        //RESERVA 6 SOCIEDAD 3
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '8',
            'reserva_id'=>'6',   
        ]);

        
        
    }
}
