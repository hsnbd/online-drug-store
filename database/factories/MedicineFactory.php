<?php

use Faker\Generator as Faker;
use App\Unit;
use App\Power;
use App\Generic;
use App\Supplier;
use App\SubCategory;

$factory->define(App\Medicine::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(20),
        'price' => $faker->randomFloat(50, 200),
        'stock' => $faker->numberBetween(1, 10),
        'least_order' => $faker->numberBetween(1, 5),
        'supplier_id' => $faker->numberBetween(1, 10),
        'sub_category_id' => $faker->numberBetween(1, 10),
        'unit_id' => $faker->numberBetween(1, 10),
        'generic_id' => $faker->numberBetween(1, 10),
        'power_id' => $faker->numberBetween(1, 10),
    ];
});
