<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        "product_name" => $faker->name,
        "description" => $faker->text,
        "tiny_description" => $faker->text(20),
        "image_url" => $faker->imageUrl(176, 255, "fashion", true),
        "price" => $faker->randomFloat(2, 200, 300),
        "priceof" => $faker->randomFloat(2, 200, 300),
        "priceper" => $faker->randomFloat(2, 0, 200),
    ];
});
