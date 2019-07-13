<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $fakeDate = $faker->dateTimeThisYear;
    $groups = [1, 50, 99];
    shuffle($groups);
    return [
        'username' => $faker->userName,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => $groups[0] > 1 ? $fakeDate : null,
        'password' => bcrypt('123456'), // secret
        'remember_token' => str_random(10),
        'group' => $groups[0],
        'created_at' => $fakeDate,
        'updated_at' => $fakeDate
    ];
});
