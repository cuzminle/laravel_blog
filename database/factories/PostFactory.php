<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'content' => $this->faker->text,
            'image' => 'https://snip1.ru/wp-content/uploads/2020/08/nebulus-audi-rs-7-mit-leistungssteigerung-auf-962-ps.jpg',
            'likes' => random_int(100,10000),
            'category_id' => Category::get()->random()->id
        ];
    }
}
