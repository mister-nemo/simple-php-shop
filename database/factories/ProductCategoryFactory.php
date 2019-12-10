<?php

use App\Products;
use App\Categories;
use Faker\Generator as Faker;

$factory->define(ProductsCategories::class, function (Faker $faker) {
    return [
        'product_id' => Products::all()->random(1)->first()->id,
        'category_id' => Categories::all()->random(1)->first()->id,
    ];
});
