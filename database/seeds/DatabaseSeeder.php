<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(roles_seeder::class);
        $this->call(user_seeder::class);
        $this->call(sociedad_seeder::class);
        $this->call(sociedad_user_seeder::class);
        $this->call(incidencias_seeder::class);
        $this->call(tipo_reserva_seeder::class);
        $this->call(reservas_seeder::class);
        $this->call(mesas_seeder::class);
        $this->call(mesa_reserva_seeder::class);
        $this->call(producto_seeder::class);
        $this->call(producto_sociedad_seeder::class);
        $this->call(factura_seeder::class);
        $this->call(linea_seeder::class);
        $this->call(peticiones_sociedad_seeder::class);
        
    }
}
