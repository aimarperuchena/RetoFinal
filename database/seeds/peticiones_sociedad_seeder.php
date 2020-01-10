<?php

use Illuminate\Database\Seeder;

class peticiones_sociedad_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peticion_sociedad')->insert([
            'sociedad_id'=>1,
            'usuario_id'=>11,
            'estado'=>'pendiente'
        ]);
        DB::table('peticion_sociedad')->insert([
            'sociedad_id'=>2,
            'usuario_id'=>12,
            'estado'=>'pendiente'
        ]);
    }
}
