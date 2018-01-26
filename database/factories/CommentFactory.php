<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph(20),
        'user_id' => $faker->numberBetween(1, 10),
        'commentable_id' => $faker->numberBetween(1, 300),
        'commentable_type' => 'App\Medicine',
    ];
});
