<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Borrower;
use Faker\Generator as Faker;

$factory->define(Borrower::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName
    ];
});
