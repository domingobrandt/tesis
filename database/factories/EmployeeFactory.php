<?php

use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    $names=$faker->name;

    return [
        'name' => $names,
        'bio'=> $faker->paragraph,
        'slug' => str_slug($names),
        'avatar' => $faker->imageUrl($width=260, $height=260),
    ];
});
