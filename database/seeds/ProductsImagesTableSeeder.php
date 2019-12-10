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
        foreach (Products::where('variation', 0)->get() as $product) {

        	factory(App\ProductsImages::class)->create([
			    'product_id' => $product->id
			]);
		}
    }
}
