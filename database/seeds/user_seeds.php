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
            'name' => 'admin',
            'email'=>'admin@example.com',
            'password'=>bcrypt('adminadmin'),
            'role_id'=>'1'

            ]);

            DB::table('users')->insert([
                'name' => 'user',
                'email'=>'user@example.com',
                'password'=>bcrypt('usuariousuario'),
                'role_id'=>'2'
                ]);
    }
}
