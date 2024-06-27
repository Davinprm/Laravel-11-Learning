<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
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
        return [
            'title' => fake()->sentence(1, false),
            'author_id' => User::factory(),
            'slug' => Str::slug(fake()->sentence(5, false)),
            'article' => fake()->text()
        ];
    }
}

// php artisan tinker
// App\Models\Article::factory(15)->recycle(User::factory(3)->create())->create()
// create 15 articles for each article and assigns random author in User table