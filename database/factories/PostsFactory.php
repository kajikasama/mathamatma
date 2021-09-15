<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,6)),
            'slug' => $this->faker->slug(),
            'author_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,3), 
            'excerpt' => $this->faker->paragraph(), 
            // 'body' => $this->faker->paragraphs(mt_rand(8,12))
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)), true)->map(fn ($p) => "<p>$p</p>")->implode('')
        ];
    }
}
