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
        DB::table('mesas')->insert([
            'sociedad_id' => '3',
            'capacidad'=>10,
            
        ]);
        DB::table('mesas')->insert([
            'sociedad_id' => '1',
            'capacidad'=>20,
        ]);
        
        DB::table('mesas')->insert([
            'sociedad_id' => '3',
            'capacidad'=>10,
            
        ]);
        DB::table('mesas')->insert([
            'sociedad_id' => '2',
            'capacidad'=>20,
        ]);  
    }
}
