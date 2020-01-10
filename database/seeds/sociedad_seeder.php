<?php

use Illuminate\Database\Seeder;

class sociedad_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        DB::table('sociedad')->insert([
            'nombre' => 'Sociedad Pesadores',
            'ubicacion'=>'Donosti',
            'telefono'=>12345678,
            'administrador_id'=>'8',
            'link_plano'=>'pescadores.jpg',
            'descripcion'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
        ]);
        DB::table('sociedad')->insert([
            'nombre' => 'Sociedad Armonia',
            'ubicacion'=>'Pasaia',
            'telefono'=>12345678,
            'administrador_id'=>'9',
            'link_plano'=>'armonia.jpg',
            'descripcion'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
        ]);
        DB::table('sociedad')->insert([
            'nombre' => 'Sociedad Bascongada',
            'ubicacion'=>'Donosti',
            'telefono'=>12345678,
            'administrador_id'=>'10',
            'link_plano'=>'bascongada.jpg',
            'descripcion'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
        ]);
    }
}
