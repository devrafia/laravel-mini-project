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
            'author_id' => Author::inRandomOrder()->first()->id, // Membuat data author jika belum ada
            'category_id' => Category::inRandomOrder()->first()->id, // Membuat data category jika belum ada
            'publisher_id' => Publisher::inRandomOrder()->first()->id, // Membuat data publisher jika belum ada
        ];
    }
}
