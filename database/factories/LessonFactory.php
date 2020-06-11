<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use Faker\Provider\Lorem;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
