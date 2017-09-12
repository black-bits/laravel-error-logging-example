<?php

use Faker\Generator as Faker;

$factory->define(App\Recipe::class, function (Faker $faker) {

    // fake slugs
    $name = $faker->words(3, true);
    $name = str_replace(" ", "-", $name);

    return [
        'name' => $name
    ];
});
