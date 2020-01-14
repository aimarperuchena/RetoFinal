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
            'password' => bcrypt('adminadmin'),
            'role_id' => '1'

        ]);
        //2
        DB::table('users')->insert([
            'nombre' => 'user',
            'apellido' => 'user',
            'telefono' => 12345678,
            'email' => 'user@example.com',
            'password' => bcrypt('usuariousuario'),
            'role_id' => '3'
        ]);
        //3
        DB::table('users')->insert([
            'nombre' => 'aimar',
            'apellido' => 'peruchena',
            'telefono' => 12345678,
            'email' => 'aimarperuchena@gmail.com',
            'password' => bcrypt('aimaraimar'),
            'role_id' => '3'
        ]);

        //4
        DB::table('users')->insert([
            'nombre' => 'jeffry',
            'apellido' => 'molina',
            'telefono' => 12345678,
            'email' => 'jeffry@gmail.com',
            'password' => bcrypt('jeffryjeffry'),
            'role_id' => '3'
        ]);
        //5
        DB::table('users')->insert([
            'nombre' => 'adrian',
            'apellido' => 'rodriguez',
            'telefono' => 12345678,
            'email' => 'adrian@gmail.com',
            'password' => bcrypt('adrianadrian'),
            'role_id' => '3'
        ]);
        //6
        DB::table('users')->insert([
            'nombre' => 'tomas',
            'apellido' => 'tomas',
            'telefono' => 12345678,
            'email' => 'tomas@gmail.com',
            'password' => bcrypt('tomastomas'),
            'role_id' => '3'
        ]);
        //7
        DB::table('users')->insert([
            'nombre' => 'maria',
            'apellido' => 'maria',
            'telefono' => 12345678,
            'email' => 'maria@gmail.com',
            'password' => bcrypt('mariamaria'),
            'role_id' => '3'
        ]);
        //8
        DB::table('users')->insert([
            'nombre' => 'pescadores_admin',
            'apellido' => 'pescadores_admin',
            'telefono' => 12345678,
            'email' => 'pescadores_admin@gmail.com',
            'password' => bcrypt('pescadorespescadores'),
            'role_id' => '2'
        ]);
        //9
        DB::table('users')->insert([
            'nombre' => 'armonia_admin',
            'apellido' => 'armonia_admin',
            'telefono' => 12345678,
            'email' => 'armonia_admin@gmail.com',
            'password' => bcrypt('armoniaarmonia'),
            'role_id' => '2'
        ]);
        //10
        DB::table('users')->insert([
            'nombre' => 'bascongada_admin',
            'apellido' => 'bascongada_admin',
            'telefono' => 12345678,
            'email' => 'bascongada_admin@gmail.com',
            'password' => bcrypt('bascongadabascongada'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Tomas',
            'apellido' => 'Turvado',
            'telefono' => 12345678,
            'email' => 'JavierTomas@gmail.com',
            'password' => bcrypt('javierjavier'),
            'role_id' => '3'
        ]);
        DB::table('users')->insert([
            'nombre' => 'Iker',
            'apellido' => 'Iker',
            'telefono' => 12345678,
            'email' => 'IkerIker@gmail.com',
            'password' => bcrypt('ikeriker'),
            'role_id' => '3'
        ]);
    }
}
