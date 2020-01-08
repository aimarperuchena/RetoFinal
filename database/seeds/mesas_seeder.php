<?php

use Illuminate\Database\Seeder;

class mesas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    public function run()
    {
        //MESA 1 SOCIEDAD 1
        DB::table('mesa')->insert([
            'sociedad_id' => '1',
            'capacidad' => 20,
            'nombre'=>'A'
        ]);
        //MESA 2 SOCIEDAD 1
        DB::table('mesa')->insert([
            'sociedad_id' => '1',
            'capacidad' => 10,
            'nombre'=>'B'
        ]);
        //MESA 3 SOCIEDAD 1
        DB::table('mesa')->insert([
            'sociedad_id' => '1',
            'capacidad' => 8,
            'nombre'=>'C'
        ]);

       //MESA 4 SOCIEDAD 2
        DB::table('mesa')->insert([
            'sociedad_id' => '2',
            'capacidad' => 10,
            'nombre'=>'A'
        ]);
        //MESA 5 SOCIEDAD 2
        DB::table('mesa')->insert([
            'sociedad_id' => '2',
            'capacidad' =>5,
            'nombre'=>'B'
        ]);

        //MESA 6 SOCIEDAD 2
        DB::table('mesa')->insert([
            'sociedad_id' => '2',
            'capacidad' => 20,
            'nombre'=>'C'
        ]);

        //MESA 7 SOCIEDAD 3
        DB::table('mesa')->insert([
            'sociedad_id' => '3',
            'capacidad' => 10,

            'nombre'=>'A'
        ]);

        //MESA 8 SOCIEDAD 3
        DB::table('mesa')->insert([
            'sociedad_id' => '3',
            'capacidad' => 10,

            'nombre'=>'B'

        ]);

        //MESA 9 SOCIEDAD 3
        DB::table('mesa')->insert([
            'sociedad_id' => '3',
            'capacidad' => 10,

            'nombre'=>'C'

        ]);
    }
}
