<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Question::factory(10)->create();
        \App\Models\Reply::factory(50)->create()->each(function ($reply) {
            return $reply->like()->save(\App\Models\Like::factory()->make());
        });
    }
}
