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
    /*
   Schema::create('mesas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id');            
            $table->integer('capacidad');
            $table->timestamps();

            $table->foreign('sociedad_id')->references('id')->on('sociedad');

        });
    */
    public function run()
    {
        DB::table('mesas')->insert([
            'sociedad_id' => '1',
            'capacidad'=>10
            
        ]);
        DB::table('mesas')->insert([
            'sociedad_id' => '1',
            'capacidad'=>20
            
        ]);
        DB::table('mesas')->insert([
            'sociedad_id' => '1',
            'capacidad'=>30
            
        ]);
        DB::table('mesas')->insert([
            'sociedad_id' => '2',
            'capacidad'=>10
            
        ]);
        DB::table('mesas')->insert([
            'sociedad_id' => '2',
            'capacidad'=>20
            
        ]);
        DB::table('mesas')->insert([
            'sociedad_id' => '2',
            'capacidad'=>30
            
        ]);
        B::table('mesas')->insert([
            'sociedad_id' => '3',
            'capacidad'=>10
            
        ]);
        DB::table('mesas')->insert([
            'sociedad_id' => '3',
            'capacidad'=>20
            
        ]);
        DB::table('mesas')->insert([
            'sociedad_id' => '3',
            'capacidad'=>30
            
        ]);
    }
}
