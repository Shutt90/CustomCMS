<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Content;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //10 users with password of password
        User::factory(10)->create();
        Content::factory(5)->create();
        Blog::factory(10)->create();

    }
}
