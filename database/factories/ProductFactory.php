<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(2),
        'description'=>$faker->sentence(4),
        'Price'=>$faker->numberBetween(1,9)
    ];
});
