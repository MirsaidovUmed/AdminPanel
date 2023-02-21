<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Groups;
use App\User;
use Faker\Generator as Faker;

$factory->define(Groups::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'time' => $faker->time,
        'room' =>$faker->numberBetween('1' ,'12'),
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
    ];
});
