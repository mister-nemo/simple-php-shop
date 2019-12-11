<?php

use App\ProductsImages;
use Faker\Generator as Faker;

$factory->define(ProductsImages::class, function (Faker $faker) {
    return [
        'product_id' => 0,
        'path' => $faker->imageUrl(800, 600, 'fashion'),
    ];
});
