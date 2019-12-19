<?php

use Illuminate\Database\Seeder;

class producto_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre'=>'coca cola',
            'descripcion'=>'bebida',
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cerveza',
            'descripcion'=>'Alcohol',
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Gintonic',
            'descripcion'=>'Alcohol', 
        ]);
    }
}
