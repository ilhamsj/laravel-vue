<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'customer' => $faker->name,
        'total' => rand($min = 0, $max = 10),
        'pay' => rand($min = 0, $max = 10),
    ];
});
