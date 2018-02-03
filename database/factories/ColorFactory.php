<?php

use Faker\Generator as Faker;

$factory->define(App\Color::class, function (Faker $faker) {
    $color = [ 'red', 'green', 'blue', 'yellow', 'black', 'white', 'sky' ];
    return [
        'name' => $color[$faker->numberBetween(0, 6)]
    ];
});
