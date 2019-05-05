<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->words(4, true),
        'description' => $faker->text(500),
        'category_id' => factory(Category::class)->create()

    ];
});
