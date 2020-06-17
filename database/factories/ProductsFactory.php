<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'description' => $faker->sentence(),
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'price' => $faker->numberBetween($min = 1000, $max = 9000),
        'count' => $faker->randomDigitNotNull()
    ];
});
