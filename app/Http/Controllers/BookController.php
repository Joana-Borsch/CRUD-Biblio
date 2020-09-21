<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Database\Seeders\BookSeeder;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view ('book.index', compact('books'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show(book $book)
    {
        //
    }

    public function edit(book $book)
    {
        //
    }

    public function update(Request $request, book $book)
    {
        //
    }

    public function destroy(book $book)
    {
        //
    }
}
