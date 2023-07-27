<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Groups;
use Faker\Generator as Faker;

$factory->define(Groups::class, function (Faker $faker) {
    return [
        'language'=>$faker->languageCode('en'),
        'time' => $faker->time,
        'type'=> $faker->jobTitle('group'),
        'room' =>$faker->numberBetween('1' ,'12'),
        'user_id' => $faker->numberBetween(1 , 51),


    ];
});
