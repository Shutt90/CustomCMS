<?php

namespace Database\Factories;

use App\Models\Content;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Content::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1),
            'content' => $this->faker->paragraph(5),
            'tab_title' => $this->faker->sentence(1),
            'meta_title' => $this->faker->sentence(1),
            'meta_description' => $this->faker->sentence(10),
            'meta_keywords' => $this->faker->sentence(5),
        ];
    }

}
