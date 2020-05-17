<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $title = $faker->unique()->jobTitle;
    $slug = Str::slug($title, '-');
    return [
        'category_id' => Category::all()->random()->id,
        'title' => $title,
        'slug' => $slug,
        'description' => $faker->realText,
        'price' => '500',

    ];
});
