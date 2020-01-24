<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $date = $faker->dateTimeThisMonth()->format('Y-m-d H:i:s');
    return [
        'text' => $faker->text($maxNbChars = 255),
        'user_id'=>$faker->numberBetween($min = 1, $max = 50),
        'img'=>$faker->imageUrl($width = 640, $height = 480),
        'created_at'=>$date,
        'updated_at'=>$date,
    ];
});
