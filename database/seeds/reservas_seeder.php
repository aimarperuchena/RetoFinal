<?php

use Illuminate\Database\Seeder;

class reservas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sociedad_id'); 
            $table->unsignedBigInteger('usuario_id');
            $table->date('fecha');
            $table->integer('personas');
            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('users');

            $table->foreign('sociedad_id')->references('id')->on('sociedad');

        });
        */
    public function run()
    {
        DB::table('reservas')->insert([
            'sociedad_id' => '1',
            'usuario_id'=>'2',
            'fecha'=>'10/12/2019',
            'personas'=>'10'   
        ]);
        DB::table('reservas')->insert([
            'sociedad_id' => '1',
            'usuario_id'=>'2',
            'fecha'=>'11/12/2019',
            'personas'=>'10'   
        ]);
        DB::table('reservas')->insert([
            'sociedad_id' => '1',
            'usuario_id'=>'2',
            'fecha'=>'12/12/2019',
            'personas'=>'10'   
        ]);


        DB::table('reservas')->insert([
            'sociedad_id' => '2',
            'usuario_id'=>'3',
            'fecha'=>'10/12/2019',
            'personas'=>'10'   
        ]);
        DB::table('reservas')->insert([
            'sociedad_id' => '2',
            'usuario_id'=>'3',
            'fecha'=>'11/12/2019',
            'personas'=>'10'   
        ]);
        DB::table('reservas')->insert([
            'sociedad_id' => '2',
            'usuario_id'=>'3',
            'fecha'=>'12/12/2019',
            'personas'=>'10'   
        ]);
    }
}
