<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\tbladmin;
use Faker\Generator as Faker;

$factory->define(tbladmin::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('admin123'),
    ];
});
