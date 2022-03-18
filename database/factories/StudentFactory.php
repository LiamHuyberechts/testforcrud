<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'rnumber'=>"r".$faker->regexify('[0-9]{7}'),
        'team_id'=>$faker->numberBetween(1,5),
        'active'=>$faker->boolean(50),
    ];
});
