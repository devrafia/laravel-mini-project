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
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
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

        $name = 'John';
        User::create([
            'name' => $name,
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role' => 'penulis'
        ]);

        Author::create([
            'name' => $name,
        ]);

        Author::factory()->count(4)->create();
        Publisher::factory()->count(5)->create();

        Book::factory(50)->create(); // Membuat 10 data buku
    }
}
