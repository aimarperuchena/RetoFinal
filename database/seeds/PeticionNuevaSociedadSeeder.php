<?php

use Illuminate\Database\Seeder;

class PeticionNuevaSociedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('peticion_nueva_sociedad')->insert([
          'nombre' => 'Catadores Sociedad',
          'ubicacion'=>'Donosti',
          'telefono'=>789456123,
          'link_plano'=>"https://i.imgur.com/tLMp6Jd.jpg",
          'descripcion'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and   more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
          'estado' => 'pendiente',
          'user_id'=>'11',
      ]);
    }
}
