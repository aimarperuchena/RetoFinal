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
        $this->call(Roles_seeder::class);
        $this->call(user_seeds::class);
        $this->call(sociedad_seeder::class);
        
    }
}
