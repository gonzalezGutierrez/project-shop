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
        factory(\App\Models\Category::class)->times(15)->create();
        factory(\App\Models\Brand::class)->times(15)->create();
        factory(\App\Models\Product::class)->times(100)->create();

        $this->call([
            RoleSeeder::class,
        ]);
    }
}
