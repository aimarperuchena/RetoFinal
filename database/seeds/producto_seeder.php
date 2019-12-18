<?php

use Illuminate\Database\Seeder;

class producto_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /*
      Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id');            
            $table->string('nombre');
            $table->longText('descripcion');
            $table->double('precio');
            $table->integer('stock');
            $table->timestamps();

            $table->foreign('sociedad_id')->references('id')->on('sociedad');

        });
        */
    public function run()
    {
        DB::table('productos')->insert([
            'sociedad_id' => '1',
            'nombre'=>'coca cola',
            'descripcion'=>'bebida',
            'precio'=>2,
            'stock'=>10   
        ]);
        DB::table('productos')->insert([
            'sociedad_id' => '1',
            'nombre'=>'Cerveza',
            'descripcion'=>'Alcohol',
            'precio'=>2,
            'stock'=>10   
        ]);
        DB::table('productos')->insert([
            'sociedad_id' => '1',
            'nombre'=>'Gintonic',
            'descripcion'=>'Alcohol',
            'precio'=>2,
            'stock'=>10   
        ]);
        DB::table('productos')->insert([
            'sociedad_id' => '1',
            'nombre'=>'Puros',
            'descripcion'=>'Tabaco',
            'precio'=>2,
            'stock'=>10   
        ]);
        DB::table('productos')->insert([
            'sociedad_id' => '1',
            'nombre'=>'Fanta',
            'descripcion'=>'Bebida',
            'precio'=>2,
            'stock'=>10   
        ]);
        
    }
}
