<?php

use Faker\Generator as Faker;

$factory->define(App\Script::class, function (Faker $faker) {
    return [
      'script_text' => $faker->paragraph(),
      'movie_id' => factory(App\Movie::class)->create()->id
    ];
});
