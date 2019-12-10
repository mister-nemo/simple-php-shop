<?php

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'variation' => 0,
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'quantity' => $faker->randomNumber(1),
        'price' => $faker->randomFloat(2, 1, 100),
        'enabled' => 1,
    ];
});
