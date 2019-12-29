<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TransactionProduct;
use Faker\Generator as Faker;

$factory->define(TransactionProduct::class, function (Faker $faker) {
    return [
        'product_id' => rand(1, 1),
        'transaction_id' => rand(1, 1),
        'quantities' => rand(1, 10),
        'notes' => $faker->text(100),
    ];
});
