<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Judul buku
            'author_id' => Author::factory(), // Membuat data author jika belum ada
            'category_id' => Category::factory(), // Membuat data category jika belum ada
            'publisher_id' => Publisher::factory(), // Membuat data publisher jika belum ada
        ];
    }
}
