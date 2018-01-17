<?php

use Faker\Generator as Faker;
use App\Disease;
use App\Medicine;

$factory->define(App\Remedy::class, function (Faker $faker) {
    return [
        'disease_id' => $faker->numberBetween(1, 10),
        'medicine_id' => $faker->numberBetween(1, 300),
    ];
});
