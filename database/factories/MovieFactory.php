<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence(3),
      'release_date' => date('Y-m-d'),
      'income' => $faker->numberBetween(1000,1000000),
      'expense' => $faker->numberBetween(1000,1000000),
      'production_company_id' => function(){
        return factory(App\production_company::class)->create()->id;
      }
    ];
});
