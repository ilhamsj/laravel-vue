<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TransactionProduct;
use Faker\Generator as Faker;

$factory->define(TransactionProduct::class, function (Faker $faker) {
    return [
        'product_id' => factory(\App\Product::class),
        'transaction_id' => factory(\App\Transaction::class),
        'quantities' => rand(1, 10),
        'notes' => $faker->text(100),
    ];
});
