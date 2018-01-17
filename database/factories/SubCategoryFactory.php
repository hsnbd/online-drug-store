<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(App\SubCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'url_slug' => str_slug(str_random(10)),
        'category_id' => $faker->numberBetween(1, 10),
    ];
});
