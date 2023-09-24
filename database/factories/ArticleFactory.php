<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
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
        $title = $this->faker->sentence();
        return [
            'description' => $this->faker->paragraph(),
            'gender' => $this->faker->randomElement([Article::Masculino, Article::Femenino]),
            'quantity' => $this->faker->randomNumber(2),
            'category_id' => Category::all()->random()->id,
            'slug' => Str::slug($title)
        ];
    }
}
