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
        //RESERVA 7 SOCIEDAD 1
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '1',
            'reserva_id'=>'7',   
        ]);
        //RESERVA 8 SOCIEDAD 1
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '1',
            'reserva_id'=>'8',   
        ]);
        //RESERVA 9 SOCIEDAD 1
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '2',
            'reserva_id'=>'9',   
        ]);
        //RESERVA 10 SOCIEDAD 1
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '1',
            'reserva_id'=>'10',   
        ]);
        //RESERVA 11 SOCIEDAD 1
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '2',
            'reserva_id'=>'11',   
        ]);
        //RESERVA 12 SOCIEDAD 2
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '4',
            'reserva_id'=>'12',   
        ]);
        //RESERVA 13 SOCIEDAD 2
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '5',
            'reserva_id'=>'13',   
        ]);
        //RESERVA 14 SOCIEDAD 2
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '6',
            'reserva_id'=>'14',   
        ]);
        //RESERVA 15 SOCIEDAD 3
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '7',
            'reserva_id'=>'15',   
        ]);
        //RESERVA 16 SOCIEDAD 3
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '8',
            'reserva_id'=>'16',   
        ]);
        //RESERVA 17 SOCIEDAD 3
        DB::table('mesa_reserva')->insert([
            'mesa_id' => '9',
            'reserva_id'=>'17',   
        ]);
        

        
        
        
    }
}
