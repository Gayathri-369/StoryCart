<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - StoryCart</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-form {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
            width: 400px;
        }
        .form-control {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
        }
        .btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="register-form">
    <h2 style="text-align: center;">Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required>
        <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>

        <button type="submit" class="btn">Register</button>
    </form>

    <p style="text-align:center; margin-top:10px;">
        Already have an account? <a href="{{ route('login') }}">Login here</a>
    </p>
</div>

</body>
</html>
