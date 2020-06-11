<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assignment;
use Faker\Provider\Lorem;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        'question' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
