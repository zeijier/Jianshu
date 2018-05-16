<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_id = User::all()->pluck('id')->toArray();
        $faker = app(Faker\Generator::class);
        $posts= factory(Post::class)->times(50)->make()->each(function($post) use($users_id,$faker){
            $post->user_id = $faker->randomElement($users_id);
        });
        Post::insert($posts->toArray());
    }
}
