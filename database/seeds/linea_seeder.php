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
     Schema::create('lineas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producto_id'); 
            $table->unsignedBigInteger('factura_id'); 
            $table->integer('unidades');
            $table->timestamps();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('factura_id')->references('id')->on('facturas');
        });
        */
    public function run()
    {
        DB::table('lineas')->insert([
            'producto_id' => '1',
            'factura_id'=>'1',
            'unidades'=>'10',
        ]);
        DB::table('lineas')->insert([
            'producto_id' => '1',
            'factura_id'=>'2',
            'unidades'=>'10',
        ]);
        DB::table('lineas')->insert([
            'producto_id' => '1',
            'factura_id'=>'3',
            'unidades'=>'10',
        ]);
    }
}
