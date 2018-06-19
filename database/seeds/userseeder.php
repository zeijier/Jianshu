<?php

use App\User;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,50)->create();
        $user = User::find(1);
        $user->assignRole('Founder');
        $user = User::find(2);
        $user->assignRole('Maintainer');
    }
}
