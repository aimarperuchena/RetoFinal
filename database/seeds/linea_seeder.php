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
        DB::table('linea')->insert([
            'producto_sociedad_id' => '2',
            'factura_id'=>'1',
            'unidades'=>'10',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '1',
            'factura_id'=>'2',
            'unidades'=>'1',
        ]);
        DB::table('linea')->insert([
            'producto_sociedad_id' => '3',
            'factura_id'=>'1',
            'unidades'=>'15',
        ]);
    }
}
