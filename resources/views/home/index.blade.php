<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StoryCart</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> --}}


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

    <div class="menu-toggle" id="menu-toggle">&#9776;</div>
    <nav>
        <ul id="navbar-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Book</a></li>
            {{-- <li><a href="#">Events</a></li> --}}
            <li><a href="#">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="#">Log In</a></li>
            <li>
        <a href="#">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </li>
            
        </ul>
    </nav>
</header>

<section class="hero">
    <div class="hero-text">
        <h1>READ. <br> IMAGINE. <br> DISCOVER.</h1>
    </div>
    <div class="hero-image" style="margin-right: 350px; ">
        <img src="{{ asset('images/home.webp') }}" alt="Books and reading ambiance" style="width: 750px; height: 400px;">
    </div>
</section>

<section class="about-section" style="padding: 50px 20px; background-color: #f9f9f9;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; text-align: center;">
        <h2 style="color: #003366; font-size: 35px;margin-bottom: 5px;">About</h2>
        <p style="font-size: 1.1em; line-height: 1.6; margin-top: 20px; color: #f9f9f9; ">
            Welcome to <strong>StoryCart</strong>, your digital destination for discovering, enjoying, and collecting books that inspire imagination and fuel knowledge. At StoryCart, we believe in the transformative power of stories. Whether you’re a lifelong reader or just starting your literary journey, our curated collection offers something for everyone.
        </p>
        <p style="font-size: 1.1em; line-height: 1.6; margin-top: 15px;margin-top: 5px;">
            From timeless classics to modern bestsellers, our mission is to make quality books accessible, enjoyable, and part of your everyday life. With an easy-to-use interface, secure checkout, and a dedicated team passionate about books, StoryCart brings the bookstore experience to your fingertips.
        </p>
        <p style="font-size: 1.1em; line-height: 1.6; margin-top: 15px;">
            Join us in celebrating the joy of reading — one book at a time.
        </p>
    </div>
</section>

<section class="book-section">
    <h2>Books</h2>
    <div class="card-grid">
        @foreach($books as $book)
            <div class="book-card" style="width: 200px;height: 300px;">
                <img src="{{ asset('images/book1.webp' . $book->cover) }}" alt="{{ $book->title }}">
                <div class="card-content">
                    <h3>{{ $book->title }}</h3>
                    <p class="author">{{ $book->author }}</p>
                    <div class="rating">⭐⭐⭐⭐☆</div> {{-- You can replace this with dynamic stars if needed --}}
                    <p class="price">${{ number_format($book->price, 2) }}</p>
                    <div class="card-buttons">
                        <a href="#" class="btn">🛒 Add to Cart</a>
                        <a href="{{ route('books.show', $book->id) }}" class="btn-secondary">📖 View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

    <!-- Add more cards here -->
</div>



<section class="book-cards">
    <h2>Featured Books</h2>
    <div class="card-grid">
        @foreach($books as $book)
            <div class="book-card">
                <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}">
                <h3>{{ $book->title }}</h3>
                <p>{{ $book->author }}</p>
                <p>${{ number_format($book->price, 2) }}</p>
            </div>
        @endforeach
    </div>
</section>

<footer class="footer">
    <p>© 2025 StoryCart — All Rights Reserved</p>
</footer>

<script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('navbar-menu');
    toggle.addEventListener('click', () => {
        menu.classList.toggle('active');
    });
</script>
</body>
</html>
