<?php

use Illuminate\Database\Seeder;

class sociedad_user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sociedad_user')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '8'
        ]);
        DB::table('sociedad_user')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '2'
        ]);
        DB::table('sociedad_user')->insert([
            'sociedad_id' => '1',
            'usuario_id' => '3'
        ]);
        DB::table('sociedad_user')->insert([
            'sociedad_id' => '2',
            'usuario_id' => '4'
        ]);
        DB::table('sociedad_user')->insert([
            'sociedad_id' => '2',
            'usuario_id' => '9'
        ]);
        DB::table('sociedad_user')->insert([
            'sociedad_id' => '2',
            'usuario_id' => '5'
        ]);
        DB::table('sociedad_user')->insert([
            'sociedad_id' => '3',
            'usuario_id' => '10'
        ]);
        DB::table('sociedad_user')->insert([
            'sociedad_id' => '3',
            'usuario_id' => '6'
        ]);
        DB::table('sociedad_user')->insert([
            'sociedad_id' => '2',
            'usuario_id' => '7'
        ]);
    }
}
