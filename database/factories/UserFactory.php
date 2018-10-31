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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'password' => '123456',
        'fullname' => $faker->name,
        'date_of_birth' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'avata' => $faker->image(),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => str_random(10),
    ];
});

$factory->define(App\Models\Course::class, function (Faker $faker) {
    return [
        'category_id' => App\Models\Category::all()->random()->id,
        'name' => implode(' ', $faker->words(3)),
        'description' => $faker->paragraph(1),
        'rank' => $faker->unique()->numberBetween(1, 15),
        'picture' => $faker->image(),
    ];
});

$factory->define(App\Models\Lesson::class, function (Faker $faker) {
    return [
        'name' => implode(' ', $faker->words(3)),
        'content' => $faker->paragraph(1),
    ];
});
