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

            @foreach (['book6.jpg' => ['The Great Adventure', 'John Reader', '₹1,199'],
                    'book4.jpg' => ['Whispers of the Forest', 'Anna Story', '₹899'],
                    'ok3.webp' => ['Digital Dreams', 'Mark Vision','₹1,299',], 
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
                <strong>Address: </strong><a href="address" style="color: #003366; text-decoration: none;">369 Booklover's Lane, Storyville, Fictionland</a> 
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



<!--Login/Register Form-->
<div class="container" style="max-width: 600px; margin-top: 50px;">

    <ul class="nav nav-tabs mb-4" id="authTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
    </li>
    </ul>

    <div class="tab-content" id="authTabsContent">
        <!-- LOGIN FORM -->
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <div class="card">
                <div class="card-header text-center" style="background-color: #003366; color: white;">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    @if ($errors->has('login') || $errors->has('password'))
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->get('login') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                @foreach ($errors->get('password') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="login">Email or Phone</label>
                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror"
                                name="login" value="{{ old('login') }}" required autofocus placeholder="Enter email or phone number">

                            @error('login')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password" required placeholder="Enter your password">

                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group form-check mt-3">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>

                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-primary w-100" style="background-color: #003366;">
                                Login
                            </button>
                        </div>

                        <div class="form-group mt-3 text-center">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- REGISTER FORM -->
        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
            <div class="card">
                <div class="card-header text-center" style="background-color: #003366; color: white;">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any() && !($errors->has('login') || $errors->has('password')))
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your full name">

                            @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required placeholder="Enter your email address">

                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password_register">Password</label>
                            <input id="password_register" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password" required placeholder="Enter your password">

                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" type="password"
                                class="form-control" name="password_confirmation" required placeholder="Confirm your password">
                        </div>

                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-primary w-100" style="background-color: #003366;">
                                Register
                            </button>
                        </div>

                        <div class="form-group mt-3 text-center">
                            <a href="{{ route('login') }}">Already have an account? Login here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection


<script>
    function toggleForm() {
        const login = document.getElementById("login-section");
        const register = document.getElementById("register-section");
        if (login.style.display === "none") {
            login.style.display = "block";
            register.style.display = "none";
        } else {
            login.style.display = "none";
            register.style.display = "block";
        }
    }



    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('navbar-menu');
    toggle.addEventListener('click', () => {
        menu.classList.toggle('active');
    });
</script>


</body>
</html>
