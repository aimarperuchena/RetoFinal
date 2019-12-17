<?php

use Illuminate\Database\Seeder;

class user_seeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'admin',
            'apellido'=>'admin',
            'telefono'=>12345678,
            'email'=>'admin@example.com',
            'password'=>bcrypt('adminadmin'),
            'role_id'=>'1'

            ]);

            DB::table('users')->insert([
                'nombre' => 'user',
                'apellido'=>'user',
                'telefono'=>12345678,
                'email'=>'user@example.com',
                'password'=>bcrypt('usuariousuario'),
                'role_id'=>'3'
                ]);


                DB::table('users')->insert([
                    'nombre' => 'aimar',
                    'apellido'=>'peruchena',
                    'telefono'=>12345678,
                    'email'=>'aimarperuchena@gmail.com',
                    'password'=>bcrypt('aimaraimar'),
                    'role_id'=>'3'
                    ]);
                    

                DB::table('users')->insert([
                    'nombre' => 'jeffry',
                    'apellido'=>'molina',
                    'telefono'=>12345678,
                    'email'=>'jeffry@gmail.com',
                    'password'=>bcrypt('jeffryjeffry'),
                    'role_id'=>'3'
                    ]);
                    DB::table('users')->insert([
                        'nombre' => 'adrian',
                        'apellido'=>'rodriguez',
                        'telefono'=>12345678,
                        'email'=>'adrian@gmail.com',
                        'password'=>bcrypt('adrianadrian'),
                        'role_id'=>'3'
                        ]);

                        DB::table('users')->insert([
                            'nombre' => 'tomas',
                            'apellido'=>'tomas',
                            'telefono'=>12345678,
                            'email'=>'tomas@gmail.com',
                            'password'=>bcrypt('tomastomas'),
                            'role_id'=>'3'
                            ]);
                            DB::table('users')->insert([
                                'nombre' => 'maria',
                                'apellido'=>'maria',
                                'telefono'=>12345678,
                                'email'=>'maria@gmail.com',
                                'password'=>bcrypt('mariamaria'),
                                'role_id'=>'3'
                                ]);
                                DB::table('users')->insert([
                                    'nombre' => 'armonia_admin',
                                    'apellido'=>'armonia_admin',
                                    'telefono'=>12345678,
                                    'email'=>'armonia_admin@gmail.com',
                                    'password'=>bcrypt('armoniaarmonia'),
                                    'role_id'=>'2'
                                    ]);
                    
    }
}
