<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'nombre'=>'Guillermo',
            'apellido'=>'Puente',
            'telefono'=>'5560111766',
            'rol_id'=>1,
            'email'=>'',
            'password'=>'mydibumedical-administracion',
        ]);
    }
}
