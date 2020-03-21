<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' =>  $faker->sentence($faker->numberBetween(3,9)),
        'body'  =>  $faker->paragraph($faker->numberBetween(5,10)),
        'publish_at'    => now(),
        'is_publish'    => 1,
        'user_id' => $faker->numberBetween(1,51),
        'category' => $faker->sentence(2),
    ];
});
