<?php

namespace App\Livewire;

use App\Models\Book as ModelsBook;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Book extends Component
{
    use WithPagination;

    public $paginate = 10;
    public $search;
    public $category = null;

    public function render()
    {
        $books = ModelsBook::latest()
            ->when($this->category, function ($query) {
                return $query->where('category_id', $this->category);
            })
            ->when($this->search, function ($query) {
                return $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate($this->paginate);

        return view('livewire.book', [
            'books' => $books,
            'categories' => Category::get(),
        ]);
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedCategory()
    {
        $this->resetPage();
    }
}
