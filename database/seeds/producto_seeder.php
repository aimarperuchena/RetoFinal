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
        DB::table('producto')->insert([
            'nombre'=>'Puros',
            'descripcion'=>'Puros', 
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Galletas',
            'descripcion'=>'Galletas', 
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Aceite',
            'descripcion'=>'Aceite', 
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Fanta Naranja',
            'descripcion'=>'Fanta Naranja', 
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Fanta Limon',
            'descripcion'=>'Fanta Limon', 
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Kas Naranja',
            'descripcion'=>'Kas Naranja', 
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Kas',
            'descripcion'=>'Kas', 
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Tejas',
            'descripcion'=>'Tejas', 
        ]);
        DB::table('producto')->insert([
            'nombre'=>'Cigarros',
            'descripcion'=>'Cigarros', 
        ]);
    }
}
