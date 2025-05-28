@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Book Collection</h1>

    <!-- Search Bar -->
    <form action="{{ route('books.search') }}" method="GET" style="margin-bottom: 20px;">
        <input type="text" name="query" placeholder="Search by title or author" class="form-control" style="max-width: 300px; display: inline-block;">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <!-- Books Grid -->
    <div class="row">
        @forelse ($books as $book)
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('storage/' . $book->cover) }}" class="card-img-top" alt="{{ $book->title }}" onerror="this.src='{{ asset('images/default.jpg') }}'">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">by {{ $book->author }}</p>
                        <p class="card-text"><strong>₹{{ number_format($book->price, 2) }}</strong></p>
                        <a href="#" class="btn btn-sm btn-success">🛒 Add to Cart</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No books found.</p>
        @endforelse
    </div>
</div>
@endsection
