<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {


    return [
        'author' => $faker->randomDigitNotNull,
        'content' => $faker->paragraphs($nb = 10, $asText = true),
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'excerpt' =>$faker->sentences($nb = 3, $asText = true),
        'status' =>$faker->randomElement($array = array ('published','draft')),
        'commentstatus' =>$faker->randomElement($array = array ('closed','open')),
        'category' => $faker->randomDigitNotNull,
        'featured_image' =>$faker->imageUrl(300, 300, 'cats')

    ];
});

$factory->define(App\Centre::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'director' => $faker->word($nb = 10, $asText = true),

        'about' =>$faker->sentences($nb = 3, $asText = true),


        'created_by' => $faker->randomDigitNotNull,
        'logolink' =>$faker->imageUrl(300, 300, 'cats')

    ];
});


$factory->define(App\Report::class, function (Faker\Generator $faker) {


    return [

        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'excerpt' =>$faker->sentences($nb = 3, $asText = true),
        'published_status' =>$faker->randomElement($array = array (1,2)),
        'posted_by' => $faker->randomDigitNotNull,
        'category' => $faker->randomDigitNotNull,
        'featured_image' =>$faker->imageUrl(300, 300, 'cats'),
        'pdf_link' =>$faker->imageUrl(300, 300, 'cats'),
        'leadreport' =>0
    ];
});

$factory->define(App\News::class, function (Faker\Generator $faker) {


    return [

        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content' => $faker->paragraphs($nb = 5, $asText = true),
        'posted_by' => $faker->randomDigitNotNull,
        'category' => $faker->randomDigitNotNull,
        'featured_image' =>$faker->imageUrl(300, 300, 'cats'),
        'published_status' =>$faker->randomElement($array = array (0,1)),

    ];
});
