<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::get();

        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        $categories = Category::get();
        $authors = Author::get();
        $publishers = Publisher::get();
        return view('books.create', [
            'categories' => $categories,
            'authors' => $authors,
            'publishers' => $publishers,
        ]);
    }

    public function store(BookRequest $request)
    {
        $file = $request->file('cover_image');

        Book::create([
            ...$request->validated(),
            'cover_image' => $file->store('images/cover', 'public')
        ]);

        return to_route('books.index');
    }
}
