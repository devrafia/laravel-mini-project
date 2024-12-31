<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Rafi Akmal',
            'email' => 'rafiakmal@gmail.com',
            'password' => Hash::make('rafiakmal')
        ]);

        $categories = [
            'Fiction',
            'Non-Fiction',
            'Science',
            'Technology',
            'History'
        ];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
        Author::factory()->count(5)->create();
        Publisher::factory()->count(5)->create();

        Book::factory(50)->create(); // Membuat 10 data buku
    }
}
