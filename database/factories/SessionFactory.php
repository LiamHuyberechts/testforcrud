<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Session;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'description'=>$faker->text(300),
    ];
});
