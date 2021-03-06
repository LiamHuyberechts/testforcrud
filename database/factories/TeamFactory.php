<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name'=>$faker->domainWord,
        'session_id'=>$faker->numberBetween(1,10),
    ];
});
