<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        //Where we format fake data
        'title' => $faker->text(50),
        'body' => $faker->text(255),
    ];
});
