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
            <li><a href="#book" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Books</a></li>
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
<section id="book" class="book-section" style="padding: 30px 10px; background-color: #ffffff;">
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h2 style="color: #003366; font-size: 26px; text-align: center; margin-bottom: 20px;">Our Books</h2>
        
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 15px;">

            <!-- Book Card Template (Repeat for Each Book) -->
            <div style="width: 22%; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <img src="{{ asset('images/book6.jpg') }}" alt="Book Title" style="width: 100%; height: 180px; object-fit: cover;">
                <div style="padding: 10px;">
                    <h3 style="font-size: 14px; color: #003366; margin-bottom: 4px;">The Great Adventure</h3>
                    <p style="color: #777; margin-bottom: 6px; font-size: 12px;">by John Reader</p>
                    <p style="font-size: 12px; color: #333; margin-bottom: 8px;">An inspiring journey through ancient lands and timeless tales.</p>
                    <p style="font-size: 14px; font-weight: bold; color: #28a745; margin-bottom: 10px;">₹1,199</p>
                    <div style="display: flex; gap: 6px;">
                        <a href="#" style="flex: 1; text-align: center; background-color: #007bff; color: white; padding: 6px 0; border-radius: 4px; font-size: 12px; text-decoration: none;">Buy Now</a>
                        <a href="#" style="flex: 1; text-align: center; background-color: #ffc107; color: #000; padding: 6px 0; border-radius: 4px; font-size: 12px; text-decoration: none;">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Example of other cards below, just changing image, title, author, and price -->
            <div style="width: 22%; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <img src="{{ asset('images/book4.jpg') }}" alt="Book Title" style="width: 100%; height: 180px; object-fit: cover;">
                <div style="padding: 10px;">
                    <h3 style="font-size: 14px; color: #003366; margin-bottom: 4px;">Whispers of the Forest</h3>
                    <p style="color: #777; margin-bottom: 6px; font-size: 12px;">by Anna Story</p>
                    <p style="font-size: 12px; color: #333; margin-bottom: 8px;">A beautiful narrative that connects nature with heartwarming emotion.</p>
                    <p style="font-size: 14px; font-weight: bold; color: #28a745; margin-bottom: 10px;">₹899</p>
                    <div style="display: flex; gap: 6px;">
                        <a href="#" style="flex: 1; text-align: center; background-color: #007bff; color: white; padding: 6px 0; border-radius: 4px; font-size: 12px; text-decoration: none;">Buy Now</a>
                        <a href="#" style="flex: 1; text-align: center; background-color: #ffc107; color: #000; padding: 6px 0; border-radius: 4px; font-size: 12px; text-decoration: none;">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Repeat the same structure for each of the remaining books -->
            @foreach (['ok3.webp' => ['Digital Dreams', 'Mark Vision','₹1,299',], 
                       'love.jpg' => ['Love Unfolded', 'Clara Bloom', '₹799'], 
                       'limits.webp' => ['Beyond Limits', 'David Knox', '₹1,050'],
                       'oliver.jpg' => ['Oliver’s Odyssey', 'Lisa Milton', '₹999'],
                       'power.jpg' => ['Power Within', 'Eli Strong', '₹1,199'],
                       'sam.jpg' => ['Finding Sam', 'Rita Ellis', '₹949'],
                       'sky.webp' => ['Above the Sky', 'Tina Bright', '₹1,099'],
                       'winter.jpg' => ['Winter Whispers', 'Kate Snow', '₹1,250'],
                       'book66.jpg' => ['Storm Pages', 'Eric Storm', '₹850'],
                       'alchemist.webp' => ['The Alchemist', 'Paulo Coelho', '₹650']] as $img => [$title, $author, $price])
                <div style="width: 22%; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/' . $img) }}" alt="{{ $title }}" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 10px;">
                        <h3 style="font-size: 14px; color: #003366; margin-bottom: 4px;">{{ $title }}</h3>
                        <p style="color: #777; margin-bottom: 6px; font-size: 12px;">by {{ $author }}</p>
                        <p style="font-size: 12px; color: #333; margin-bottom: 8px;">An inspiring journey through ancient lands and timeless tales.</p>
                        <p style="font-size: 14px; font-weight: bold; color: #28a745; margin-bottom: 10px;">{{ $price }}</p>
                        <div style="display: flex; gap: 6px;">
                            <a href="#" style="flex: 1; text-align: center; background-color: #007bff; color: white; padding: 6px 0; border-radius: 4px; font-size: 12px; text-decoration: none;">Buy Now</a>
                            <a href="#" style="flex: 1; text-align: center; background-color: #ffc107; color: #000; padding: 6px 0; border-radius: 4px; font-size: 12px; text-decoration: none;">Add to Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

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






<script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('navbar-menu');
    toggle.addEventListener('click', () => {
        menu.classList.toggle('active');
    });
</script>


</body>
</html>
