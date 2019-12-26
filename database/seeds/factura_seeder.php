<?php

use Illuminate\Database\Seeder;

class factura_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factura')->insert([
            'reserva_id' => '1',
            'fecha'=>'2019/12/19',
            'personas'=>'10',
            'importe'=>'40'
        ]);
        DB::table('factura')->insert([
            'reserva_id' => '2',
            'fecha'=>'2019/12/19',
            'personas'=>'10',
            'importe'=>'40'
        ]);
        DB::table('factura')->insert([
            'reserva_id' => '3',
            'fecha'=>'2019/12/19',
            'personas'=>'10',
            'importe'=>'40'
        ]);
    }
}
