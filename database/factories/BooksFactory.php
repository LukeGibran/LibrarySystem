<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'author' => $faker->name,
        'subject' => $faker->word,
        'date_publish' => $faker->year,
        'publishing_comp' => $faker->company,
        'place_of_publication' => $faker->state,
        'ISBN' => $faker->isbn13,
        'status' => 'in',
        'cost' => $faker->randomFloat,
        'edition' => $faker->randomDigit,
        'added_entries' => $faker->word,
        'type_of_material' => $faker->randomElement($array = array ('Journal','Periodical','Encyclopedia', 'Dictionary', 'Almanac', 'Newspaper_clipping')),
        'includes' => $faker->word,
        'remarks' => $faker->sentence,
        'no_of_copy' => $faker->randomDigit
    ];
});
