<?php

use Illuminate\Database\Seeder;

class sociedad_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     
    public function run()
    {
        
        DB::table('sociedad')->insert([
            'nombre' => 'Sociedad Pesadores',
            'ubicacion'=>'Donosti',
            'telefono'=>12345678,
            'administrador_id'=>'8'
        ]);
        DB::table('sociedad')->insert([
            'nombre' => 'Sociedad Armonia',
            'ubicacion'=>'Pasaia',
            'telefono'=>12345678,
            'administrador_id'=>'9'
        ]);
        DB::table('sociedad')->insert([
            'nombre' => 'Sociedad Bascongada',
            'ubicacion'=>'Donosti',
            'telefono'=>12345678,
            'administrador_id'=>'10'
        ]);
    }
}
