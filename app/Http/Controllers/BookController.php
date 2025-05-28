<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'price' => 'required|numeric',
            'cover' => 'nullable|image',
        ]);

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('images', 'public');
        }

        Book::create($data);

        return redirect()->route('books.index')->with('success', 'Book added!');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $books = Book::where('title', 'like', '%' . $query . '%')
                ->orWhere('author', 'like', '%' . $query . '%')
                ->get();

    return view('books.index', compact('books'));
}

}
