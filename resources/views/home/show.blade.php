<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $book->title }} - StoryCart</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<header class="navbar">
    <div class="logo-alt">
        <i class="fas fa-book-open-reader"></i>
        <span class="logo-text">
            <span class="brand-primary">Story</span><span class="brand-secondary">Cart</span>
        </span>
    </div>
</header>

<div class="container" style="padding: 30px;">
    <h1>Book Details</h1>

    <div class="card" style="max-width: 600px; margin-top: 20px;">
        <div class="card-body">
            <img src="{{ asset('images/' . $book->cover) }}" alt="{{ $book->title }}" style="width: 100%; max-width: 200px; height: auto; margin-bottom: 15px;">

            <h2>{{ $book->title }}</h2>
            <h4 style="color: gray;">By {{ $book->author }}</h4>
            <p><strong>Price:</strong> ${{ number_format($book->price, 2) }}</p>
            <p><strong>Description:</strong> {{ $book->description ?? 'No description available.' }}</p>

            <form action="{{ route('books.addToCart', $book->id) }}" method="POST" style="margin-top: 20px; display: inline-block;">
                @csrf
                <button type="submit" class="btn">🛒 Add to Cart</button>
            </form>

            <a href="{{ url('/') }}" class="btn-secondary" style="margin-left: 10px;">← Back to Home</a>
        </div>
    </div>
</div>

<footer class="footer" style="margin-top: 50px; text-align: center;">
    <p>© 2025 StoryCart — All Rights Reserved</p>
</footer>

</body>
</html>
