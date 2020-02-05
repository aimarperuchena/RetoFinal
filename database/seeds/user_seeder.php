<?php

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('users')->insert([
            'nombre' => 'admin',
            'apellido' => 'admin',
            'telefono' => 12345678,
            'email' => 'admin@example.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('adminadmin'),
            'role_id' => '1'

        ]);
        //2
        DB::table('users')->insert([
            'nombre' => 'user',
            'apellido' => 'user',
            'telefono' => 12345678,
            'email' => 'user@example.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('usuariousuario'),
            'role_id' => '3'
        ]);
        //3
        DB::table('users')->insert([
            'nombre' => 'aimar',
            'apellido' => 'peruchena',
            'telefono' => 12345678,
            'email' => 'aimarperuchena@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('aimaraimar'),
            'role_id' => '3'
        ]);

        //4
        DB::table('users')->insert([
            'nombre' => 'jeffry',
            'apellido' => 'molina',
            'telefono' => 12345678,
            'email' => 'jeffry@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('jeffryjeffry'),
            'role_id' => '3'
        ]);
        //5
        DB::table('users')->insert([
            'nombre' => 'adrian',
            'apellido' => 'rodriguez',
            'telefono' => 12345678,
            'email' => 'adrian@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('adrianadrian'),
            'role_id' => '3'
        ]);
        //6
        DB::table('users')->insert([
            'nombre' => 'tomas',
            'apellido' => 'tomas',
            'telefono' => 12345678,
            'email' => 'tomas@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('tomastomas'),
            'role_id' => '3'
        ]);
        //7
        DB::table('users')->insert([
            'nombre' => 'maria',
            'apellido' => 'maria',
            'telefono' => 12345678,
            'email' => 'maria@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('mariamaria'),
            'role_id' => '3'
        ]);
        //8
        DB::table('users')->insert([
            'nombre' => 'pescadores_admin',
            'apellido' => 'pescadores_admin',
            'telefono' => 12345678,
            'email' => 'pescadores_admin@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('pescadorespescadores'),
            'role_id' => '2'
        ]);
        //9
        DB::table('users')->insert([
            'nombre' => 'armonia_admin',
            'apellido' => 'armonia_admin',
            'telefono' => 12345678,
            'email' => 'armonia_admin@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('armoniaarmonia'),
            'role_id' => '2'
        ]);
        //10
        DB::table('users')->insert([
            'nombre' => 'bascongada_admin',
            'apellido' => 'bascongada_admin',
            'telefono' => 12345678,
            'email' => 'bascongada_admin@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('bascongadabascongada'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Tomas',
            'apellido' => 'Sebastian',
            'telefono' => 12345678,
            'email' => 'tomas@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('javierjavier'),
            'role_id' => '3'
        ]);
        DB::table('users')->insert([
            'nombre' => 'Iker',
            'apellido' => 'Iker',
            'telefono' => 12345678,
            'email' => 'IkerIker@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('ikeriker'),
            'role_id' => '3'
        ]);
        DB::table('users')->insert([
            'nombre' => 'Alejandro',
            'apellido' => 'Villareal',
            'telefono' => 12345678,
            'email' => 'alejandro@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),

            'password' => bcrypt('123456789'),
            'role_id' => '3'
        ]);
    }
}
