<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'title'=> $title,
            'content'=> fake()->paragraph(5),
            'slug'=> \Illuminate\Support\str::slug($title),
            'image'=>fake()->imageUrl(),
            'category_id'=>Category::inRandomOrder()->first()->id,
            'user_id'=> User::inRandomOrder(4)->first()->id,
            'published_at'=> fake()->optional()->dateTime(),
        ];
    }
}
