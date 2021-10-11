<?php

namespace Tests\Feature;

use App\Models\Content;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testUploadContent()
    {
        $newContent = new Content;

        $newContent->title = 'Testing Title';
        $newContent->content = 'Testing content is working correctly';
        $newContent->page_id = '99';
        $newContent->tab_title = 'Title of page';
        $newContent->meta_title = 'Title of meta';
        $newContent->meta_description = 'Description of the meta and stuff';
        $newContent->meta_keywords = 'Keywords go here';
        $newContent->save();

        $this->assertDatabaseHas('contents', [
            'title' => 'Testing Title',
            'content' => 'Testing content is working correctly',
            'tab_title' => 'Title of page',
            'meta_title' => 'Title of meta',
            'meta_description' => 'Description of the meta and stuff',
            'meta_keywords' => 'Keywords go here',
        ]);
                
    }
}
