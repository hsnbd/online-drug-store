<?php

use Faker\Generator as Faker;

$factory->define(App\Shipping::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'address' => $faker->address,
        'email' => $faker->safeEmail,
        'mobile' => $faker->phoneNumber,
    ];
});
