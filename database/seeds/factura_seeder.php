<?php

use Illuminate\Database\Seeder;

class factura_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //RESERVA 1 SOCIEDAD 1
        DB::table('factura')->insert([
            'reserva_id' => '1',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '40'
        ]);

        //RESERVA 2 SOCIEDAD 1
        DB::table('factura')->insert([
            'reserva_id' => '2',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '40'
        ]);
        //RESERVA 3 SOCIEDAD 2
        DB::table('factura')->insert([
            'reserva_id' => '3',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '40'
        ]);

        //RESERVA 4 SOCIEDAD 2
        DB::table('factura')->insert([
            'reserva_id' => '4',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '40'
        ]);

        //RESERVA 5 SOCIEDAD 3
        DB::table('factura')->insert([
            'reserva_id' => '5',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '40'
        ]);

        //RESERVA 6 SOCIEDAD 3
        DB::table('factura')->insert([
            'reserva_id' => '6',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '40'
        ]);
    }
}
