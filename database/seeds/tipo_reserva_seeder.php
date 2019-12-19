<?php

use Illuminate\Database\Seeder;

class tipo_reserva_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_reserva')->insert([
            'nombre' => 'cena',
        ]);
        DB::table('tipo_reserva')->insert([
            'nombre' => 'comida',
        ]);
        DB::table('tipo_reserva')->insert([
            'nombre' => 'merienda',
        ]);

    }
}
