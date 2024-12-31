<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit(Request $request, Book $book)
    {
        $categories = Category::get();
        $authors = Author::get();
        $publishers = Publisher::get();
        return view('books.edit', [
            'book' => $book,
            'categories' => $categories,
            'authors' => $authors,
            'publishers' => $publishers,
        ]);
    }

    public function update(BookRequest $request, Book $book)
    {
        if ($request->hasFile('cover_image')) {
            if ($book->cover_image) {

                Storage::disk('public')->delete($book->cover_image);
            }
            $file = $request->file('cover_image');
            $path = $file->store('images/cover', 'public');
        } else {
            $path = $book->cover_image;
        }

        $book->update([
            ...$request->validated(),
            'cover_image' => $path,
        ]);

        return to_route('books.index');
    }

    public function destroy(Book $book)
    {
        if ($book->cover_image) {
            Storage::disk('public')->delete($book->cover_image);
        }
        $book->delete();
        return response()->json(['message' => 'Buku berhasil dihapus!']);
    }
}
