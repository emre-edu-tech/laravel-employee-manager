<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Department;

$factory->define(Department::class, function (Faker $faker) {
	$name = $faker->departmentName;
    return [
        'name' => $name,
        'description' => $faker->sentence(rand(5,10), '.'),
        'slug' => str_slug($name, $separator = '-'),
    ];
});