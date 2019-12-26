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
        DB::table('producto')->insert([
            'nombre'=>'coca cola',
            'descripcion'=>'bebida',
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Cerveza',
            'descripcion'=>'Alcohol',
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Gintonic',
            'descripcion'=>'Alcohol', 
        ]);
    }
}
