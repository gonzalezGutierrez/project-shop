<?php

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Provider::create(['nombre'=>'Farmacias Guadalajara']);
    }
}
