<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

 $factory->define(Post::class, function (Faker $faker)
 {
    $users=App\User::pluck('id')->toArray();
    return [
        'user_id'=>$faker->randomElement($users),
        'caption'=>$faker->realText($maxNbChars = 100, $indexSize = 2),
        'image'=>$faker->image('public/uploads',640,480, null, false),
        
    ];
});