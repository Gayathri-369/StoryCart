@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 500px; margin-top: 50px;">
    <div class="card">
        <div class="card-header text-center" style="background-color: #003366; color: white;">
            <h4>Register</h4>
        </div>

        <div class="card-body">
            @if ($errors->any())
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
                    <label for="password">Password</label>
                    <input id="password" type="password"
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
@endsection
