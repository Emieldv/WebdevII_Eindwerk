<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(App\Article::class, function (Faker $faker) {

    $title = $faker->sentence(5);
    $intro = $faker->sentence(60);
    $content = $faker->sentence(600);

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'intro' => $intro,
        'content' => $content,
        'active' => 1
    ];
});
