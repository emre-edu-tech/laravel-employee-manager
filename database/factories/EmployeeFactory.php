<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => str_slug($name, $separator = '-'),
        'age' => $faker->numberBetween(18, 65),
        'gender' => $faker->randomElement(['male', 'female']),
    ];
});
