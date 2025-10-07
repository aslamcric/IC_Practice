<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookIndex extends Component
{
    protected $listeners = [
        'book-created' => '$refresh',
    ];

    // public function getListeners()
    // {
    //     return [
    //         'book-created' => '$refresh',
    //     ];
    // }


    public function render()
    {
        $books = Book::latest()->get();
        // dd($books);

        return view('livewire.book-index', ['books' => $books]);
    }
}
