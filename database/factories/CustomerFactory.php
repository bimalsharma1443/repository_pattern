<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email_id' => $faker->email,
        'phone_number' => rand(9833333333,9899999999),
        'location' => $faker->city
    ];
});
