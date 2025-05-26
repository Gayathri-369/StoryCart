<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Show all books
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Show single book detail
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    // (Optional) Add to Cart - requires session/cart logic
    public function addToCart($id)
    {
        $book = Book::findOrFail($id);
        // Logic to add book to cart session can go here
        return back()->with('success', 'Book added to cart!');
    }
}
