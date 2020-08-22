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
    }
}
