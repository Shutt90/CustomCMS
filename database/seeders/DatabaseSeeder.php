<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Content;
use App\Models\Category;
use App\Models\File;
use App\Models\Page;
use App\Models\Term;

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
        File::factory(10)->create();
        Category::factory(3)->create();
        Page::factory(1)->create();
        Term::factory(1)->create();
        foreach(range(1, 3) as $int) {
            Content::factory()->create(['page_id' => $int]);
          }
    }
}
