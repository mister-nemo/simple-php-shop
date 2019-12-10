<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Products::class, 25)->create();

        foreach (App\Products::all()->random(5) as $product) {

			factory(App\Products::class, 3)->create([
			    'variation' => $product->id
			]);

		}

		factory(App\Products::class, 5)->create([
		    'enabled' => 0
		]);
    }
}
