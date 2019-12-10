<?php

use Illuminate\Database\Seeder;

class ProductsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductsCategories::class, 25)->create();
    }
}
