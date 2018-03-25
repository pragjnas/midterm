<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'Model' => $faker->name,
        'Year' => $faker->year($max = 'now'),
    ];
});
