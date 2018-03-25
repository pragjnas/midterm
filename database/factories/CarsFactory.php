<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'Model' => $faker->randomElement($array = array ('LX','XL','CRV')),
        'Year' => $faker->year($max = 'now'),
    ];
});
