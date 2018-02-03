<?php

use Faker\Generator as Faker;
$factory->define(App\Shape::class, function (Faker $faker) {
    $shape = [ 'rectangle', 'square', 'round', 'oval', 'oblong', 'diamond', '3_sided', '5_sided' ];
    return [
        'name' => $shape[$faker->numberBetween(0, 7)]
    ];
});
