<?php

namespace App\Livewire;

use App\Models\Book as ModelsBook;
use Livewire\Component;
use Livewire\WithPagination;

class Book extends Component
{
    use WithPagination;

    public $paginate = 10;

    public function render()
    {
        return view('livewire.book', [
            'books' => ModelsBook::latest()->paginate($this->paginate)
        ]);
    }
}
