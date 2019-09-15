<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Department;

$factory->define(Department::class, function (Faker $faker) {
	$name = $faker->words(rand(1,2), true);
    return [
        'name' => $name,
        'description' => $faker->sentences(rand(3,6), '.'),
        'slug' => str_slug($name, $separator = '-'),
    ];
});