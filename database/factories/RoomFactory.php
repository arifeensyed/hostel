<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'hasAC'=>$faker->boolean(40),

    ];
});
