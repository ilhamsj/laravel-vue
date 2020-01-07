<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id'   => factory(\App\Category::class),
        'name'          => $faker->randomElement(['jawamie', 'racun tikus', 'teh jawa', 'ciki', 'baygon', 'rondap']),
        'price'         => rand(1000, 10000),
    ];
});
