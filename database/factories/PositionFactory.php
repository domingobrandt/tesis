<?php

use Faker\Generator as Faker;
use App\Position;

$factory->define(App\Position::class, function (Faker $faker) {
    $jobTitle = $faker->jobTitle();

    return [
        'name' => $jobTitle,
        'bio'=> $faker->paragraph,
        'slug' => str_slug($jobTitle),
        'avatar' => $faker->imageUrl($width=260, $height=260),
    ];
});
