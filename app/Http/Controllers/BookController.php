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
        // $books = Book::get();
        return view('books.index');
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

    public function recapCategory()
    {
        $categories = Category::withCount('books')->get();
        return view('books.recap-category', ['categories' => $categories]);
    }

    public function recapPublisher()
    {
        $publishers = Publisher::withCount('books')->get();
        return view('books.recap-publisher', ['publishers' => $publishers]);
    }

    public function list()
    {
        if (auth()->user()->isAdmin()) {
            $books = Book::with(['author', 'publisher', 'category'])
                ->latest()->paginate(9);
        } else {
            $books = Book::with(['author', 'publisher', 'category'])
                ->whereHas('author', function ($query) {
                    $query->where('name', auth()->user()->name);
                })->latest()->paginate(9);
        }
        return view('books.list', ['books' => $books]);
    }
}
