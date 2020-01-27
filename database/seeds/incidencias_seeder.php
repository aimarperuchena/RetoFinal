<?php

use Illuminate\Database\Seeder;

class incidencias_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
      Schema::create('incidencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id');            
            $table->longText('descripcion');
            $table->string('estado');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('sociedad_id')->references('id')->on('sociedad');

        });
        */
    public function run()
    {
        DB::table('incidencia')->insert([
            'sociedad_id' => '1',
            'descripcion'=>'La cafetera no va',
            'estado'=>'pendiente',
            'fecha'=>'2019/12/2'
        ]);
        DB::table('incidencia')->insert([
            'sociedad_id' => '2',
            'descripcion'=>'La puerta no va',
            'estado'=>'pendiente',
            'fecha'=>'2019/12/2'
        ]);
        DB::table('incidencia')->insert([
            'sociedad_id' => '3',
            'descripcion'=>'La sarten esta rota',
            'estado'=>'solucionado',
            'fecha'=>'2019/12/2'
        ]);
    }
}
