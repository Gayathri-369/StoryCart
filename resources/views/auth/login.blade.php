@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 500px; margin-top: 50px;">
    <div class="card">
        <div class="card-header text-center" style="background-color: #003366; color: white;">
            <h4>Login</h4>
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

                <div class="form-group mt-3 text-center">
                    <a href="{{ route('register') }}">Don't have an account? Register here</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
