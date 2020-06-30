<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Introduction;
use Faker\Generator as Faker;

$factory->define(Introduction::class, function (Faker $faker) {
    return [
        'body' => 'This is some content for the body.'
    ];
});
