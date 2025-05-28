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
        <ul id="navbar-menu" style="list-style-type: none; padding: 0; display: flex; gap: 20px;">
            <form action="{{ route('books.search') }}" method="GET" style="margin-left: 20px; display: flex; align-items: center;">
        <input type="text" name="query" placeholder="Search books..." style="padding: 6px 12px; border: 1px solid #ccc; border-radius: 20px 0 0 20px;">
        <button type="submit" style="padding: 6px 12px; border: 1px solid #ccc; background-color: #1a4d5c; color: white; border-radius: 0 20px 20px 0;">🔍</button>
    </form>
            <li><a href="#" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Home</a></li>
            <li><a href="#book" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Book</a></li>
            <li><a href="#about" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">About Us</a></li>
            <li><a href="#contact" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Contact</a></li>
            <li><a href="#login-section" style="text-decoration:none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Log In</a></li>
            <li><a href="#" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
        
    </nav>

</header>

@extends('layout')

@section('content')

<section class="hero">
    <div class="hero-text">
        <h1>READ. <br> IMAGINE. <br> DISCOVER.</h1>
    </div>
    <div class="hero-image" style="margin-right: 350px;">
        <img src="{{ asset('images/home.webp') }}" alt="Books and reading ambiance" style="width: 750px; height: 400px;">
    </div>
</section>

<section id="about" class="about-section" style="padding: 50px 20px; background-color: #f9f9f9;">


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
<!--Book section start-->
<section class="book-section" style="padding: 20px; color: #003366;">
    <h2 style="text-align: center;">Books from Our Collection</h2>
    <div class="card-grid" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach($books as $book)
            <div class="book-card" style="width: 200px; border: 1px solid #ddd; padding: 10px; box-shadow: 2px 2px 6px #ccc;">
                <img src="{{ asset('storage/' . $book->cover) }}" 
                    alt="{{ $book->title }}" 
                    style="width: 100%; height: 180px; object-fit: cover;"
                    onerror="this.src='{{ asset('images/book5.jpg') }}'">
                <div class="card-content" style="padding: 8px;">
                    <h3>{{ $book->title }}</h3>
                    <p class="author" style="color: #555;">by {{ $book->author }}</p>
                    <div class="rating" style="color: #f39c12;">{{ str_repeat('⭐', $book->rating) }}</div>
                    <p class="price" style="font-weight: bold;">₹{{ number_format($book->price, 2) }}</p>
                    <div class="card-buttons" style="display: flex; gap: 5px;">
                        <a href="#" class="btn" style="background-color: #28a745; color: white;">🛒 Add</a>
                        <a href="#" class="btn-secondary" style="background-color: #007bff; color: white;">📖 View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>


<!--Book section end-->
<!--contact section start-->

<section class="contact-section" id="contact" style="padding: 50px 20px; background-color: #f9f9f9;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; text-align: center;">
        <h2 style="color: #003366; font-size: 35px; margin-bottom: 5px;">Contact Us</h2>
        <p style="font-size: 1.1em; line-height: 1.6; margin-top: 20px;">
            We’d love to hear from you! Whether you have questions, feedback, or need assistance, our team is here to help. Get in touch with us using the information below.
        </p>
        <div style="margin-top: 30px; text-align: left;">
            <p style="font-size: 1.1em; line-height: 1.6; margin-top: 10px;">
                <strong>Email:</strong> <a href="mailto:support@storycart.com" style="color: #003366; text-decoration: none;">support@storycart.com</a>
            </p>
            <p style="font-size: 1.1em; line-height: 1.6; margin-top: 10px;">
                <strong>Phone:</strong> <a href="tel:+1234567890" style="color: #003366; text-decoration: none;">+1 (234) 567-890</a>
            </p>
            <p style="font-size: 1.1em; line-height: 1.6; margin-top: 10px;">
                <strong>Address:</strong> 123 Booklover's Lane, Storyville, Fictionland
            </p>
        </div>
        <div style="margin-top: 30px;">
            <h3 style="color: #003366; font-size: 25px;">Follow Us</h3>
            <div style="margin-top: 15px;">
                <a href="#" style="margin-right: 15px; font-size: 20px; color: #003366;"><i class="fab fa-facebook"></i></a>
                <a href="#" style="margin-right: 15px; font-size: 20px; color: #003366;"><i class="fab fa-twitter"></i></a>
                <a href="#" style="font-size: 20px; color: #003366;"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</section>


<section class="login-section" id="login-section" style="padding: 50px 20px; background-color: #f9f9f9;">

    <div class="container" style="max-width: 1000px; margin: 0 auto; text-align: center;">
        <h2 style="color: #003366; font-size: 35px; margin-bottom: 5px;">Login</h2>
        <p style="font-size: 1.2em; line-height: 1.6; margin-top: 20px;">
            Please log in to access your account.
        </p>
        <form style="margin-top: 30px; text-align: left; max-width: 400px; margin: 30px auto;">
            <div style="margin-bottom: 20px;">
                <label for="email-phone" style="font-size: 0.9em; color: #003366;">Phone number/Email ID</label>
                <input type="text" id="email-phone" name="email-phone" placeholder="Enter here" 
                    style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="password" style="font-size: 0.9em; color: #003366;">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" 
                    style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <button 
                    type="submit" 
                    style="background-color: #003366; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 1.1em; cursor: pointer; transition: background-color 0.3s ease;" 
                    onmouseover="this.style.backgroundColor='#0055aa'" 
                    onmouseout="this.style.backgroundColor='#003366'">
                    Login
                </button>
            </div>
        </form>
        <p style="margin-top: 20px; font-size: 1.1em; color: #003366;">
            New user? <a href="#" style="color: #003366; text-decoration: none; font-weight: bold;">Register here</a>
        </p>
    </div>
</section>


<footer class="footer" style="background: linear-gradient(135deg, #e3f5ec, #ffffff); padding: 60px 20px 30px; color: #2c3e50; font-family: 'Segoe UI', sans-serif;">
    <div style="max-width: 1300px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; gap: 30px;">
        <div style="flex: 1 1 300px;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                <i class="fas fa-book-open-reader fa-2x" style="color: #1a4d5c;"></i>
                <span style="font-size: 1.7em; font-weight: bold;">Story<span style="color:#1a4d5c;">Cart</span></span>
            </div>
            <p style="font-size: 16px; line-height: 1.7;">
                Your curated library of imagination—where stories meet soul. From bestselling books to bookish boxes, StoryCart brings the joy of reading right to your door.
            </p>
            <div style="margin-top: 20px;">
                <a href="#" style="margin-right: 15px; font-size: 20px; color: #1a4d5c;"><i class="fab fa-facebook"></i></a>
                <a href="#" style="margin-right: 15px; font-size: 20px; color: #1a4d5c;"><i class="fab fa-twitter"></i></a>
                <a href="#" style="font-size: 20px; color: #1a4d5c;"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div style="display: flex; flex: 2 1 600px; justify-content: space-between; flex-wrap: wrap; gap: 30px;">
            <div>
                <h4 style="font-size: 18px; margin-bottom: 12px; color: #1a4d5c;">Brand Story</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">About Us</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Contact Us</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Blog</a></li>
                </ul>
            </div>
            <div>
                <h4 style="font-size: 18px; margin-bottom: 12px; color: #1a4d5c;">Shop Now</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Books</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Mystery Box</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Merchandise</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Gifting</a></li>
                </ul>
            </div>
            <div>
                <h4 style="font-size: 18px; margin-bottom: 12px; color: #1a4d5c;">Policies</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Privacy Policy</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Shipping & Returns</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Terms & Conditions</a></li>
                    <li><a href="#" style="text-decoration: none; color: #2c3e50;">Track Order</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div style="margin-top: 40px; display: flex; flex-direction: column; align-items: center;">
        <form style="display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
            <input type="email" placeholder="Subscribe to our newsletter" style="padding: 10px 20px; border-radius: 25px; border: 1px solid #ccc; flex: 1 1 250px;">
            <button style="background-color: #1a4d5c; color: white; padding: 10px 25px; border-radius: 25px; border: none;">Subscribe</button>
        </form>
        <p style="font-size: 14px; margin-top: 30px; color: #555;">© 2025 StoryCart — All Rights Reserved</p>
        <p style="font-size: 14px; margin-top: 5px; color: #555;">Crafted with 📚 and ❤️ by StoryCart Team</p>
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
