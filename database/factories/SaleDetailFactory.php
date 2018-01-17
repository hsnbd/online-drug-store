<?php

use Faker\Generator as Faker;
use App\Shipping;
use App\Medicine;

$factory->define(App\SaleDetail::class, function (Faker $faker) {
    return [
        'medicine_id' => $faker->numberBetween(1, 300),
        'shipping_id' => $faker->numberBetween(1, 30),
        'quantity' => $faker->numberBetween(1, 10),
        'discount' => $faker->numberBetween(1, 10),
        'date' => $faker->dateTime,
        'sale_status' => $faker->boolean,
    ];
});
