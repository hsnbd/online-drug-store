<?php

use Faker\Generator as Faker;
use App\Medicine;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'medicine_id' => $faker->numberBetween(1, 300),
        'rating' => $faker->numberBetween(1, 5),
    ];
});
