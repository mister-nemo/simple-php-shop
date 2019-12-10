<?php

use App\Products;
use Faker\Generator as Faker;

$factory->define(ProductsImages::class, function (Faker $faker) {
    return [
        'product_id' => 0,
        'name' => $faker->name,
        'path' => imageUrl(800, 600, 'fashion'),
    ];
});
