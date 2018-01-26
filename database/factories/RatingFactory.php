<?php

use Faker\Generator as Faker;
use App\Medicine;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'rating' => $faker->numberBetween(1, 5),
        'user_id' => $faker->numberBetween(1, 10),
        'rateable_id' => $faker->numberBetween(1, 300),
        'rateable_type' => 'App\Medicine',
    ];
});
