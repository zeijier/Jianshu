<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//    注意顺序
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(userseeder::class);
        $this->call(PostSeeder::class);
    }
}
