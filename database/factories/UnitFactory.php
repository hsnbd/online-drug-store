<?php

use Faker\Generator as Faker;

$factory->define(App\Unit::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
