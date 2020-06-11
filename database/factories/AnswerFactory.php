<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answer;
use Faker\Provider\Miscellaneous;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'answer' => $faker->name,
        'is_correct' => $faker->boolean($chanceOfGettingTrue = 50)
    ];
});
