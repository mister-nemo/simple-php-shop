<?php

use App\Products;
use App\Categories;
use Faker\Generator as Faker;

$factory->define(ProductsCategories::class, function (Faker $faker) {
    return [
        'product_id' => 0,
        'category_id' => Categories::all()->random(1)->first()->id,
    ];
});
