<?php

use App\Services\Utilities\Specialty;
use App\Services\Utilities\Title;
use Faker\Generator as Faker;

$factory->define(App\Doctor::class, function (Faker $faker) {
    return [
        'title' => array_random(Title::keyNames()),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'licence' => rand(100000, 400000),
        'specialty' => array_random(Specialty::keyNames()),
    ];
});
