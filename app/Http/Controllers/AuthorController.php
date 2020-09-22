<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = Author::all();
        return view('author.index', compact('authors'));
    }

    public function create()
    {
        return view('author.create');
    }

    public function store(Request $request)
    {
        Author::create($request->all());
        return redirect('/author');
    }


    public function show(Author $author)
    {
        //
    }

    public function edit(Author $author)
    {
        return view('author.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $author->update($request->all());
        return redirect('/author');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect('/author');
    }
}
