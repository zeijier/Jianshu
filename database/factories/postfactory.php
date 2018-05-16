<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'content'=>$faker->text(100),
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
    ];
});
