<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => 1,
        'name' => $faker->name,
        'price' => rand($min = 0, $max = 10),
    ];
});
