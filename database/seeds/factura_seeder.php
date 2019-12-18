<?php

use Illuminate\Database\Seeder;

class factura_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reserva_id'); 
            $table->date('fecha');
            $table->integer('personas');
            $table->double('importe');
            $table->timestamps();
            $table->foreign('reserva_id')->references('id')->on('reservas');

        });
        */
    public function run()
    {
        DB::table('facturas')->insert([
            'reserva_id' => '1',
            'fecha'=>'12/12/2019',
            'personas'=>'10',
            'importe'=>'40'
        ]);
        DB::table('facturas')->insert([
            'reserva_id' => '2',
            'fecha'=>'12/12/2019',
            'personas'=>'10',
            'importe'=>'40'
        ]);
        DB::table('facturas')->insert([
            'reserva_id' => '3',
            'fecha'=>'12/12/2019',
            'personas'=>'10',
            'importe'=>'40'
        ]);
    }
}
