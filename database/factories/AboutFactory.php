<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    {

        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph(3),
            'file_path' => $this->faker->imageUrl(),
        ];
    }
}
