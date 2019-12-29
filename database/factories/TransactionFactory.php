<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'customer'  => $faker->name,
        'total'     => rand(1000, 10000),
        'pay'       => rand(1000, 10000),
    ];
});
