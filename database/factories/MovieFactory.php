<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
      'name' => 'Movie Title',
      'release_date' => date('Y-m-d'),
      'income' => 1000,
      'expense' => 1000
    ];
});
