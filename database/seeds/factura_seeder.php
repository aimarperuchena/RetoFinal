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

        //RESERVA 1 SOCIEDAD 1 FACTURA 1
        DB::table('factura')->insert([
            'reserva_id' => '1',
            'sociedad_id'=>'1',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);

        //RESERVA 2 SOCIEDAD 1 FACTURA 2
        DB::table('factura')->insert([
            'reserva_id' => '2',
            'sociedad_id'=>'1',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);
        //RESERVA 3 SOCIEDAD 2 FACTURA 3
        DB::table('factura')->insert([
            'reserva_id' => '3',
            'sociedad_id'=>'2',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);

        //RESERVA 4 SOCIEDAD 2 FACTURA 4
        DB::table('factura')->insert([
            'reserva_id' => '4',
            'sociedad_id'=>'2',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);

        //RESERVA 5 SOCIEDAD 3 FACTURA 5
        DB::table('factura')->insert([
            'reserva_id' => '5',
            'sociedad_id'=>'3',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);

        //RESERVA 6 SOCIEDAD 3 FACTURA 6
        DB::table('factura')->insert([
            'reserva_id' => '6',
            'sociedad_id'=>'3',
            'fecha' => '2019/12/19',
            'personas' => '10',
            'importe' => '60'
        ]);
        //RESERVA 7 SOCIEDAD 1 FACTURA 7
            DB::table('factura')->insert([
                'reserva_id' => '7',
                'sociedad_id'=>'1',
                'fecha' => '2019/12/21',
                'personas' => '10',
                'importe' => '26'
            ]);

        //RESERVA 8 SOCIEDAD 1 FACTURA 8
        DB::table('factura')->insert([
            'reserva_id' => '8',
            'sociedad_id'=>'1',
            'fecha' => '2019/12/21',
            'personas' => '10',
            'importe' => '26'
        ]);
         //RESERVA 9 SOCIEDAD 1 FACTURA 9
         DB::table('factura')->insert([
            'reserva_id' => '9',
            'sociedad_id'=>'1',
            'fecha' => '2019/12/21',
            'personas' => '10',
            'importe' => '26'
        ]);

         //RESERVA 10 SOCIEDAD 1 FACTURA 10
         DB::table('factura')->insert([
            'reserva_id' => '10',
            'sociedad_id'=>'1',
            'fecha' => '2019/12/22',
            'personas' => '10',
            'importe' => '26'
        ]);

         //RESERVA 11 SOCIEDAD 1 FACTURA 11
         DB::table('factura')->insert([
            'reserva_id' => '11',
            'sociedad_id'=>'1',
            'fecha' => '2019/12/22',
            'personas' => '10',
            'importe' => '92'
        ]);
         //RESERVA 12 SOCIEDAD 2 FACTURA 12
         DB::table('factura')->insert([
            'reserva_id' => '12',
            'sociedad_id'=>'2',
            'fecha' => '2019/12/22',
            'personas' => '10',
            'importe' => '120'
        ]);
        //RESERVA 13 SOCIEDAD 2 FACTURA 13
        DB::table('factura')->insert([
            'reserva_id' => '13',
            'sociedad_id'=>'2',
            'fecha' => '2019/12/23',
            'personas' => '10',
            'importe' => '120'
        ]);
        //RESERVA 14 SOCIEDAD 2 FACTURA 14
        DB::table('factura')->insert([
            'reserva_id' => '14',
            'sociedad_id'=>'2',
            'fecha' => '2019/12/24',
            'personas' => '10',
            'importe' => '36'
        ]);
         //RESERVA 15 SOCIEDAD 3 FACTURA 15
         DB::table('factura')->insert([
            'reserva_id' => '15',
            'sociedad_id'=>'3',
            'fecha' => '2019/12/25',
            'personas' => '10',
            'importe' => '34'
        ]);
         //RESERVA 16 SOCIEDAD 3 FACTURA 16
         DB::table('factura')->insert([
            'reserva_id' => '16',
            'sociedad_id'=>'3',
            'fecha' => '2019/12/26',
            'personas' => '10',
            'importe' => '122'
        ]);
        //RESERVA 17 SOCIEDAD 3 FACTURA 17
        DB::table('factura')->insert([
            'reserva_id' => '17',
            'sociedad_id'=>'3',
            'fecha' => '2019/12/25',
            'personas' => '10',
            'importe' => '48'
        ]);
         
     
     



        
    }
}
