<?php

use Illuminate\Database\Seeder;

class producto_sociedad_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('productos_sociedad')->insert([
            'sociedad_id' => '2',
            'producto_id' => '1',
            'precio'=>2,
            'stock'=>10   
        ]);
        DB::table('productos_sociedad')->insert([
            'sociedad_id' => '1',
            'producto_id' => '3',
            'precio'=>2,
            'stock'=>10   
        ]);
        DB::table('productos_sociedad')->insert([
            'sociedad_id' => '3',
            'producto_id' => '2',
            'precio'=>2,
            'stock'=>10   
        ]);
        
    }
}
