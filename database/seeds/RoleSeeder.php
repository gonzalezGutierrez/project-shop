<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::create(['nombre'=>'administrador']);
        \App\Role::create(['nombre'=>'gerente']);
        \App\Role::create(['nombre'=>'cliente']);

        \App\Models\PaymentMethod::create([
            'nombre'=>'paypal',
            'estatus'=>'activo'
        ]);

        \App\User::create([
            'nombre'=>'Guillermo',
            'apellido'=>'Puente',
            'telefono'=>'5560111766',
            'rol_id'=>1,
            'email'=>'mydibumedical@gmail.com',
            'password'=>'mydibumedical-administracion',
        ]);
    }
}
