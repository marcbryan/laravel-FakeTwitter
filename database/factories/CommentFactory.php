<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
  $date = $faker->dateTimeThisMonth()->format('Y-m-d H:i:s');
    return [
        'text' => $faker->text($maxNbChars = 255),
        'img'=>$faker->imageUrl($width = 640, $height = 480),
        'user_id'=>$faker->numberBetween($min = 1, $max = 50),
        'post_id'=>$faker->numberBetween($min = 1, $max = 50),
        'created_at'=>$date,
        'updated_at'=>$date,
    ];
});
