<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Course::class, function (Faker $faker) {
    return [
        'course_key' => strtoupper($faker->bothify('ROB###')),
        'title' => $faker->sentence,
        'cover' => $faker->imageUrl(),
        'content' => $faker->paragraph,
        'robotics_kit_id' => rand(1,3)
    ];
});