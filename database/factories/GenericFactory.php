<?php

use Faker\Generator as Faker;

$factory->define(App\Generic::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(20),
    ];
});
