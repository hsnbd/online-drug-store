<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'medicine_id' => $faker->numberBetween(1, 300),
        'comment' => $faker->paragraph(20),
    ];
});
