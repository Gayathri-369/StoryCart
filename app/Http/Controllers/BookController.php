<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Display list of all books on home.index
    public function index()
    {
        $books = Book::all();  // fetch all books from DB
        return view('home.index', compact('books'));
    }

    // Display single book details
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('home.show', compact('book'));
    }

    // Example: Add book to cart (stored in session)
    public function addToCart($id)
    {
        $book = Book::findOrFail($id);

        // Get current cart from session or empty array
        $cart = session()->get('cart', []);

        // If book is already in cart, increase quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Otherwise add new book with quantity 1
            $cart[$id] = [
                "title" => $book->title,
                "quantity" => 1,
                "price" => $book->price,
                "cover" => $book->cover
            ];
        }

        // Save cart back to session
        session()->put('cart', $cart);

        return back()->with('success', 'Book added to cart!');
    }
}
