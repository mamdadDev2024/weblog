<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title =$this->faker->word();
        return [
            "title"=> $title,
            "slug"=> \Str::slug($title),
            'context' => $this->faker->paragraphs(rand(10 , 20), true),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
