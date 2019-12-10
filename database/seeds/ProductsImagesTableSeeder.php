<?php

use Illuminate\Database\Seeder;

class ProductsImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductsImages::class, 25)->create();
    }
}
