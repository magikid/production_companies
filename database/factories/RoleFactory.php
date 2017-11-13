<?php

use Faker\Generator as Faker;

$factory->define(App\Role::class, function (Faker $faker) {
    return [
      'movie_id' => function(){
        return factory(App\Movie::class)->create()->id;
      },
      'actor_id' => function(){
        return factory(App\Actor::class)->create()->id;
      },
      'character_name' => $faker->name(),
      'base_pay' => $faker->numberBetween(1000,10000),
      'revenue_share' => $faker->numberBetween(2,15)
    ];
});
