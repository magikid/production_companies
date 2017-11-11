<?php

use Faker\Generator as Faker;

$factory->define(App\production_company::class, function (Faker $faker) {
    return [
      'name' => $faker->company
    ];
});
