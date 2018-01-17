<?php

use Faker\Generator as Faker;

$factory->define(App\WatchList::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'medicine_id' => $faker->numberBetween(1, 300),
    ];
});
