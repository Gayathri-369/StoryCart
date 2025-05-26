<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StoryCart</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Log In</a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </nav>
</header>

<section class="hero">
    <div class="hero-text">
        <h1>READ. <br> IMAGINE. <br> DISCOVER.</h1>
    </div>
    <div class="hero-image" style="margin-right: 350px;">
        <img src="{{ asset('images/home.webp') }}" alt="Books and reading ambiance" style="width: 750px; height: 400px;">
    </div>
</section>

<section class="about-section" style="padding: 50px 20px; background-color: #f9f9f9;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; text-align: center;">
        <h2 style="color: #003366; font-size: 35px; margin-bottom: 5px;">About</h2>
        <p style="font-size: 1.1em; line-height: 1.6; margin-top: 20px;">
            Welcome to <strong>StoryCart</strong>, your digital destination for discovering, enjoying, and collecting books that inspire imagination and fuel knowledge. At StoryCart, we believe in the transformative power of stories. Whether you’re a lifelong reader or just starting your literary journey, our curated collection offers something for everyone.
        </p>
        <p style="font-size: 1.1em; line-height: 1.6; margin-top: 15px;">
            From timeless classics to modern bestsellers, our mission is to make quality books accessible, enjoyable, and part of your everyday life. With an easy-to-use interface, secure checkout, and a dedicated team passionate about books, StoryCart brings the bookstore experience to your fingertips.
        </p>
        <p style="font-size: 1.1em; line-height: 1.6; margin-top: 15px;">
            Join us in celebrating the joy of reading — one book at a time.
        </p>
    </div>
</section>

<section class="book-section">
    <h2 style="text-align: center;">Books</h2>
    <div class="card-grid" style="display:flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach($books as $book)
            <div class="book-card" style="width: 200px; height: 320px; border: 1px solid #ddd; padding: 10px; box-shadow: 2px 2px 6px #ccc;">
                <img 
                    src="{{ asset('images/' . $book->cover) }}" 
                    alt="{{ $book->title }}" 
                    style="width: 100%; height: 180px; object-fit: cover;"
                    onerror="this.src='{{ asset('images/warbook1.jpg') }}'"
                >
                <div class="card-content" style="padding: 8px;">
                    <h3 style="font-size: 1.1em; margin: 5px 0;">{{ $book->title }}</h3>
                    <p class="author" style="color: #555; margin: 0 0 8px;">by {{ $book->author }}</p>
                    <div class="rating" style="color: #f39c12; margin-bottom: 8px;">⭐⭐⭐⭐☆</div> 
                    <p class="price" style="font-weight: bold; margin-bottom: 8px;">₹{{ number_format($book->price, 2) }}</p>
                    <div class="card-buttons" style="display: flex; gap: 5px;">
                        <a href="#" class="btn" style="flex-grow: 1; background-color: #28a745; color: white; text-align:center; padding: 6px; border-radius: 4px;">🛒 Add to Cart</a>
                        <a href="{{ route('books.show', $book->id) }}" class="btn-secondary" style="flex-grow: 1; background-color: #007bff; color: white; text-align:center; padding: 6px; border-radius: 4px;">📖 View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<footer class="footer" style="background-color: #ffffff; padding: 40px 20px 20px; color: #2b2b2b;">
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1300px; margin: 0 auto;">
        <div style="flex: 1 1 300px; margin-bottom: 30px;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-book-open-reader fa-2x"></i>
                <span style="font-size: 1.5em; font-weight: bold;">Story<span style="color:#b86b32;">Cart</span></span>
            </div>
            <p style="font-size: 16px; line-height: 1.6; margin-top: 15px;">
                StoryCart is your online book haven—where timeless tales and modern marvels meet. Dive into a world of imagination with our curated books and bookish goodies. Proudly based in India.
            </p>
            <div style="margin-top: 10px;">
                <a href="#" style="margin-right: 10px; font-size: 20px; color: #2b2b2b;"><i class="fab fa-facebook"></i></a>
                <a href="#" style="margin-right: 10px; font-size: 20px; color: #2b2b2b;"><i class="fab fa-twitter"></i></a>
                <a href="#" style="font-size: 20px; color: #2b2b2b;"><i class="fab fa-instagram"></i></a>
            </div>
            <div style="margin-top: 15px; display: flex; gap: 10px; flex-wrap: wrap;">
                <input type="email" placeholder="Subscribe to emailer" style="padding: 10px; border-radius: 25px; border: none; flex: 1 1 250px;">
                <button style="background-color: #b86b32; color: white; padding: 10px 20px; border-radius: 25px; border: none;">Subscribe</button>
            </div>
        </div>
        <div style="display: flex; flex: 2 1 500px; justify-content: space-between; flex-wrap: wrap;">
            <div>
                <h4 style="font-size: 20px; margin-bottom: 10px;">Brand Story</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">About Us</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">Contact Us</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">Blog</a></li>
                </ul>
            </div>
            <div>
                <h4 style="font-size: 20px; margin-bottom: 10px;">Shop Now</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">Books</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">Mystery Box</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">Merchandise</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">Gifting</a></li>
                </ul>
            </div>
            <div>
                <h4 style="font-size: 20px; margin-bottom: 10px;">Policies</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">Privacy Policy</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">Shipping & Returns</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">T&amp;C</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2b2b2b;">Track Order</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div style="border-top: 1px solid #d3a178; margin-top: 30px; padding-top: 15px; text-align: center; max-width: 1300px; margin: 30px auto 0; font-size: 14px;">
        <p style="margin: 5px;">© 2025 StoryCart — All Rights Reserved</p>
        <p style="margin: 5px;">Made with ❤️ by StoryCart</p>
    </div>
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
