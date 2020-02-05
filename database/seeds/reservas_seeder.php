<?php

use Illuminate\Database\Seeder;

class reservas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id'); 
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('tipo_id');
            $table->date('fecha');
            $table->integer('personas');
            $table->timestamps();
        */
    public function run()
    {

        //RESERVA 1 SOCIEDAD 1
        DB::table('reserva')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '2',
            'tipo_id' => '1',
            'fecha' => '2019-12-20',
            'personas' => '10'
        ]);

        //RESERVA 2 SOCIEDAD 1
        DB::table('reserva')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '3',
            'tipo_id' => '1',
            'fecha' => '2019-12-20',
            'personas' => '10'
        ]);

        //RESERVA 3 SOCIEDAD 2
        DB::table('reserva')->insert([
            'sociedad_id' => '2',
            'usuario_id' => '4',
            'tipo_id' => '1',
            'fecha' => '2019-12-20',
            'personas' => '10'
        ]);
        //RESERVA 4 SOCIEDAD 2
        DB::table('reserva')->insert([
            'sociedad_id' => '2',
            'usuario_id' => '5',
            'tipo_id' => '1',
            'fecha' => '2019-12-20',
            'personas' => '10'
        ]);

        //RESERVA 5 SOCIEDAD 3
        DB::table('reserva')->insert([
            'sociedad_id' => '3',
            'usuario_id' => '6',
            'tipo_id' => '1',
            'fecha' => '2019-12-20',
            'personas' => '10'
        ]);
        //RESERVA 6 SOCIEDAD 3
        DB::table('reserva')->insert([
            'sociedad_id' => '3',
            'usuario_id' => '7',
            'tipo_id' => '1',
            'fecha' => '2019-12-20',
            'personas' => '10'
        ]);

        //RESERVA 7 SOCIEDAD 1
        DB::table('reserva')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '3',
            'tipo_id' => '1',
            'fecha' => '2019-12-21',
            'personas' => '10'
        ]);

        //RESERVA 8 SOCIEDAD 1
        DB::table('reserva')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '2',
            'tipo_id' => '1',
            'fecha' => '2019-12-21',
            'personas' => '10'
        ]);
        //RESERVA 9 SOCIEDAD 1
        DB::table('reserva')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '3',
            'tipo_id' => '1',
            'fecha' => '2019-12-21',
            'personas' => '10'
        ]);

        //RESERVA 10 SOCIEDAD 1
        DB::table('reserva')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '2',
            'tipo_id' => '1',
            'fecha' => '2019-12-22',
            'personas' => '10'
        ]);
        //RESERVA 11 SOCIEDAD 1
        DB::table('reserva')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '3',
            'tipo_id' => '1',
            'fecha' => '2019-12-23',
            'personas' => '10'
        ]);

        //RESERVA 12 SOCIEDAD 2
        DB::table('reserva')->insert([
            'sociedad_id' => '2',
            'usuario_id' => '4',
            'tipo_id' => '1',
            'fecha' => '2019-12-30',
            'personas' => '10'
        ]);
        //RESERVA 13 SOCIEDAD 2
        DB::table('reserva')->insert([
            'sociedad_id' => '2',
            'usuario_id' => '5',
            'tipo_id' => '1',
            'fecha' => '2019-12-30',
            'personas' => '10'
        ]);
        //RESERVA 14 SOCIEDAD 2
        DB::table('reserva')->insert([
            'sociedad_id' => '2',
            'usuario_id' => '4',
            'tipo_id' => '1',
            'fecha' => '2019-12-31',
            'personas' => '10'
        ]);
        //RESERVA 15 SOCIEDAD 3
        DB::table('reserva')->insert([
            'sociedad_id' => '3',
            'usuario_id' => '7',
            'tipo_id' => '1',
            'fecha' => '2020-01-20',
            'personas' => '10'
        ]);
        //RESERVA 16 SOCIEDAD 3
        DB::table('reserva')->insert([
            'sociedad_id' => '3',
            'usuario_id' => '8',
            'tipo_id' => '1',
            'fecha' => '2020-01-20',
            'personas' => '10'
        ]);
        //RESERVA 17 SOCIEDAD 3
        DB::table('reserva')->insert([
            'sociedad_id' => '3',
            'usuario_id' => '7',
            'tipo_id' => '1',
            'fecha' => '2020-01-22',
            'personas' => '10'
        ]);


    }
}
