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
        foreach (App\Products::all() as $product) {

        	factory(App\ProductsCategories::class)->create([
			    'product_id' => $product->id
			]);
		}
    }
}
