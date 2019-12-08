<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Record;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Model;

$factory->define(Record::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'desc' => $faker->paragraph(),
        'content' => $faker->text(2000),
        'img_url' => $faker->imageUrl(),
    ];
});
