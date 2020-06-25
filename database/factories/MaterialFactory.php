<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Material;
use Faker\Provider\Internet;
use Faker\Generator as Faker;

$factory->define(Material::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'link' => $faker->url
    ];
});
