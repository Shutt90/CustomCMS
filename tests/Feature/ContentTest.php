<?php

namespace Tests\Feature;

use App\Models\Content;
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

    public function testStoreFail()
    {

        $this->withoutMiddleware();
        
        $params = [
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nulla aliquam, commodi quia ipsam dolorem praesentium pariatur aliquid tempore itaque minima quas voluptates quis ipsum incidunt doloribus perferendis recusandae, vel illum! Quisquam culpa atque esse odio laboriosam, cumque possimus, enim unde est autem amet fuga voluptate nesciunt totam nobis. Voluptates id quam necessitatibus doloribus, earum quo dolorum magnam et asperiores nemo ipsa rem! Placeat deserunt, sequi dignissimos illo, dolor ut culpa odit dolorem iste natus corrupti? Aliquam sint, fugit quos harum odit ea accusamus a nemo. Eligendi dicta asperiores unde culpa repudiandae! Eius doloremque molestias deserunt eligendi maiores atque iste unde recusandae odit voluptatibus illum, omnis ex dolorum ut autem. Doloribus molestiae magni, minus similique mollitia voluptate deleniti placeat voluptatibus, quo perferendis, temporibus inventore quasi ullam? Facilis aliquid ratione rerum architecto, ducimus pariatur debitis error ut esse inventore magni ipsam perferendis doloremque, obcaecati unde, eligendi dolore rem nostrum non repudiandae neque. Illum, aspernatur quos veritatis eius saepe reprehenderit perspiciatis modi optio laborum veniam delectus. Natus, molestiae. Voluptate eaque, distinctio obcaecati tenetur vel nesciunt ipsam eos neque temporibus esse, dolores ducimus odio deleniti tempore delectus, eligendi commodi libero possimus rem? Consequuntur alias expedita repellendus perferendis neque architecto molestiae maxime aliquid ipsam nulla minus facere quisquam dolores nam, sunt a minima laudantium quae veritatis quia dolore omnis! Possimus ratione ipsa voluptatum atque, dolor fugit facilis quam officiis id harum necessitatibus dolorem labore architecto at vitae assumenda ipsum ipsam. Distinctio reiciendis corrupti saepe maiores atque iure. Repudiandae, maxime! Iste dolorum illo, ullam natus dolore pariatur quisquam blanditiis? Dolor quidem modi cupiditate voluptate harum nemo tempora numquam ipsum doloribus maiores dicta ut quisquam error aspernatur, esse iusto dolores, obcaecati aperiam natus! Modi at, inventore, adipisci sed ratione praesentium molestias ipsum tempore laudantium et voluptatibus. Eligendi suscipit modi illo a odio dicta, reiciendis saepe itaque?',
            'tab_title' => 'This is way too long to be a tab title I think the max should be 30 and no more',
            'meta_title' => 'This is way too long to be a meta title I think the max should be 30 and no more',
        ];

        $this->post('admin/content', $params)
        ->assertStatus(302)
        ->assertSessionHas('errors');

        $messages = session('errors')->getMessages();
        $this->assertEquals($messages['title'][0], 'The title must not be greater than 30 characters.');
        $this->assertEquals($messages['content'][0], 'The content field is required.');
        $this->assertEquals($messages['tab_title'][0], 'The tab title must not be greater than 30 characters.');
        $this->assertEquals($messages['meta_title'][0], 'The meta title must not be greater than 30 characters.');
        $this->assertEquals($messages['meta_description'][0], 'The meta description field is required.');
        $this->assertEquals($messages['meta_keywords'][0], 'The meta keywords field is required.');

    }
}
