<?php

use Illuminate\Database\Seeder;

class linea_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    $table->bigIncrements('id');
            $table->unsignedBigInteger('producto_sociedad_id'); 
            $table->unsignedBigInteger('factura_id'); 
            $table->integer('unidades');
        */
    public function run()
    {

        //FACTURA 1 RESERVA 1 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '1',
            'sociedad_id'=>'1',
            'factura_id' => '1',
            'unidades' => '10',
            'importe'=>20
        ]);

         //FACTURA 1 RESERVA 1 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '2',
            'sociedad_id'=>'1',
            'factura_id' => '1',
            'unidades' => '10',
            'importe'=>20
        ]);
         //FACTURA 1 RESERVA 1 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '3',
            'sociedad_id'=>'1',
            'factura_id' => '1',
            'unidades' => '10',
            'importe'=>20
        ]);
        
        
         //FACTURA 2 RESERVA 2 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '1',
            'sociedad_id'=>'1',
            'factura_id' => '2',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '2',
            'sociedad_id'=>'1',
            'factura_id' => '2',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '3',
            'sociedad_id'=>'1',
            'factura_id' => '2',
            'unidades' => '10',
            'importe'=>20
        ]);

        //FACTURA 3 RESERVA 3 SOCIEDAD 2
        DB::table('linea')->insert([
            'producto_sociedad_id' => '9',
            'sociedad_id'=>'1',
            'factura_id' => '3',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '10',
            'sociedad_id'=>'1',
            'factura_id' => '3',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '11',
            'sociedad_id'=>'1',
            'factura_id' => '3',
            'unidades' => '10',
            'importe'=>20
        ]);

         //FACTURA 4 RESERVA 4 SOCIEDAD 2
         DB::table('linea')->insert([
            'producto_sociedad_id' => '9',
            'sociedad_id'=>'2',
            'factura_id' => '4',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '10',
            'sociedad_id'=>'2',
            'factura_id' => '4',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '11',
            'sociedad_id'=>'2',
            'factura_id' => '4',
            'unidades' => '10',
            'importe'=>20
        ]);

         //FACTURA 5 RESERVA 5 SOCIEDAD 3
         DB::table('linea')->insert([
            'producto_sociedad_id' => '17',
            'sociedad_id'=>'3',
            'factura_id' => '5',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '18',
            'sociedad_id'=>'3',
            'factura_id' => '5',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '19',
            'sociedad_id'=>'3',
            'factura_id' => '5',
            'unidades' => '10',
            'importe'=>20
        ]);

        //FACTURA 6 RESERVA 6 SOCIEDAD 3
        DB::table('linea')->insert([
            'producto_sociedad_id' => '17',
            'sociedad_id'=>'3',
            'factura_id' => '6',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '18',
            'sociedad_id'=>'3',
            'factura_id' => '6',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '19',
            'sociedad_id'=>'3',
            'factura_id' => '6',
            'unidades' => '10',
            'importe'=>20
        ]);
        //FACTURA 7 RESERVA 7 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '6',
            'sociedad_id'=>'1',
            'factura_id' => '7',
            'unidades' => '3',
            'importe'=>6
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '5',
            'sociedad_id'=>'1',
            'factura_id' => '7',
            'unidades' => '2',
            'importe'=>4
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '4',
            'sociedad_id'=>'1',
            'factura_id' => '7',
            'unidades' => '8',
            'importe'=>16
        ]);

          //FACTURA 8 RESERVA 8 SOCIEDAD 1
          DB::table('linea')->insert([
            'producto_sociedad_id' => '6',
            'sociedad_id'=>'1',
            'factura_id' => '8',
            'unidades' => '3',
            'importe'=>6
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '5',
            'sociedad_id'=>'1',
            'factura_id' => '8',
            'unidades' => '2',
            'importe'=>4
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '4',
            'sociedad_id'=>'1',
            'factura_id' => '8',
            'unidades' => '8',
            'importe'=>16
        ]);

        //FACTURA 9 RESERVA 9 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '1',
            'sociedad_id'=>'1',
            'factura_id' => '9',
            'unidades' => '3',
            'importe'=>6
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '4',
            'sociedad_id'=>'1',
            'factura_id' => '9',
            'unidades' => '2',
            'importe'=>4
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '7',
            'sociedad_id'=>'1',
            'factura_id' => '9',
            'unidades' => '8',
            'importe'=>16
        ]);
        //FACTURA 10 RESERVA 10 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '2',
            'sociedad_id'=>'1',
            'factura_id' => '10',
            'unidades' => '3',
            'importe'=>6
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '5',
            'sociedad_id'=>'1',
            'factura_id' => '10',
            'unidades' => '2',
            'importe'=>4
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '7',
            'sociedad_id'=>'1',
            'factura_id' => '10',
            'unidades' => '8',
            'importe'=>16
        ]);
        //FACTURA 11 RESERVA 11 SOCIEDAD 1
        DB::table('linea')->insert([
            'producto_sociedad_id' => '2',
            'sociedad_id'=>'1',
            'factura_id' => '11',
            'unidades' => '3',
            'importe'=>6
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '5',
            'sociedad_id'=>'1',
            'factura_id' => '11',
            'unidades' => '3',
            'importe'=>6
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '7',
            'sociedad_id'=>'1',
            'factura_id' => '11',
            'unidades' => '40',
            'importe'=>80
        ]);

        //FACTURA 12 RESERVA 12 SOCIEDAD 2
        DB::table('linea')->insert([
            'producto_sociedad_id' => '9',
            'sociedad_id'=>'2',
            'factura_id' => '12',
            'unidades' => '20',
            'importe'=>40
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '10',
            'sociedad_id'=>'2',
            'factura_id' => '12',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '11',
            'sociedad_id'=>'2',
            'factura_id' => '12',
            'unidades' => '30',
            'importe'=>60
        ]);
         //FACTURA 13 RESERVA 13 SOCIEDAD 2
         DB::table('linea')->insert([
            'producto_sociedad_id' => '12',
            'sociedad_id'=>'2',
            'factura_id' => '13',
            'unidades' => '20',
            'importe'=>40
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '13',
            'sociedad_id'=>'2',
            'factura_id' => '13',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '14',
            'sociedad_id'=>'2',
            'factura_id' => '13',
            'unidades' => '30',
            'importe'=>60
        ]);
         //FACTURA 14 RESERVA 14 SOCIEDAD 2
         DB::table('linea')->insert([
            'producto_sociedad_id' => '12',
            'sociedad_id'=>'2',
            'factura_id' => '14',
            'unidades' => '10',
            'importe'=>20
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '14',
            'sociedad_id'=>'2',
            'factura_id' => '14',
            'unidades' => '5',
            'importe'=>10
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '16',
            'sociedad_id'=>'2',
            'factura_id' => '14',
            'unidades' => '3',
            'importe'=>6
        ]);
         //FACTURA 15 RESERVA 15 SOCIEDAD 3
         DB::table('linea')->insert([
            'producto_sociedad_id' => '17',
            'sociedad_id'=>'3',
            'factura_id' => '15',
            'unidades' => '3',
            'importe'=>6
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '18',
            'sociedad_id'=>'3',
            'factura_id' => '15',
            'unidades' => '4',
            'importe'=>8
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '20',
            'sociedad_id'=>'3',
            'factura_id' => '15',
            'unidades' => '10',
            'importe'=>20
        ]);
        //FACTURA 16 RESERVA 16 SOCIEDAD 3
        DB::table('linea')->insert([
            'producto_sociedad_id' => '22',
            'sociedad_id'=>'3',
            'factura_id' => '16',
            'unidades' => '16',
            'importe'=>32
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '23',
            'sociedad_id'=>'3',
            'factura_id' => '16',
            'unidades' => '25',
            'importe'=>50
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '21',
            'sociedad_id'=>'3',
            'factura_id' => '16',
            'unidades' => '20',
            'importe'=>40
        ]);
         //FACTURA 17 RESERVA 17 SOCIEDAD 3
         DB::table('linea')->insert([
            'producto_sociedad_id' => '22',
            'sociedad_id'=>'3',
            'factura_id' => '17',
            'unidades' => '12',
            'importe'=>24
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '23',
            'sociedad_id'=>'3',
            'factura_id' => '17',
            'unidades' => '11',
            'importe'=>22
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '21',
            'sociedad_id'=>'3',
            'factura_id' => '17',
            'unidades' => '21',
            'importe'=>42
        ]);
    
        
    }
}
