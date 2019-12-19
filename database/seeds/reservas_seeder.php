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
            $table->unsignedBigInteger('tipo_id');
            $table->date('fecha');
            $table->integer('personas');
            $table->timestamps();
        */
    public function run()
    {
        DB::table('reservas')->insert([
            'sociedad_id' => '2',
            'usuario_id'=>'3',
            'tipo_id'=>'1',
            'fecha'=>'2019/12/20',
            'personas'=>'10'   
        ]);
        DB::table('reservas')->insert([
            'sociedad_id' => '3',
            'usuario_id'=>'2',
            'tipo_id'=>'1',
            'fecha'=>'2019/12/20',
            'personas'=>'10'   
        ]);
        DB::table('reservas')->insert([
            'sociedad_id' => '2',
            'usuario_id'=>'3',
            'tipo_id'=>'1',
            'fecha'=>'2019/12/20',
            'personas'=>'10'   
        ]);
        DB::table('reservas')->insert([
            'sociedad_id' => '1',
            'usuario_id'=>'2',
            'tipo_id'=>'3',
            'fecha'=>'2019/12/20',
            'personas'=>'10'   
        ]);
        DB::table('reservas')->insert([
            'sociedad_id' => '3',
            'usuario_id'=>'2',
            'tipo_id'=>'1',
            'fecha'=>'2019/12/20',
            'personas'=>'10'   
        ]);
    }
}
