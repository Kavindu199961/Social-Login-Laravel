@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        width: 400px;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background: transparent;
        color: #333;
        font-size: 1.8em;
        text-align: center;
        margin-bottom: 20px;
        padding: 0;
        border-bottom: none;
    }

    .card-body {
        padding: 0;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 5px;
        padding: 10px;
        width: 95%;
        font-size: 1em;
        border: 1px solid #ddd;
    }

    .form-check-label {
        color: #666;
        font-weight: normal;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        border-radius: 5px;
        width: 100%;
        font-size: 1.2em;
        margin-top: 10px;
        color:white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-link {
        color: #007bff;
        text-decoration: none;
        font-size: 0.9em;
        margin-top: 10px;
    }

    .btn-link:hover {
        text-decoration: underline;
        color: #0056b3;
    }

    .social-login img {
        width: 24px;
        margin-right: 10px;
    }

    .social-login a {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f0f0f5;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        text-decoration: none;
        color: #333;
        font-size: 1em;
        width: 100%;
        margin-top: 20px;
    }

    .social-login a:hover {
        background: #ddd;
    }

    .social-login {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }

    .social-login a img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    .text-center {
        text-align: center;
        margin-top: 20px;
        font-size: 0.9em;
    }

    .text-center a {
        color: #007bff;
    }

    .text-center a:hover {
        text-decoration: underline;
        color: #0056b3;
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('Username or Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Enter your Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    <!--@if (Route::has('password.request'))
                       <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif-->
                </div>

                <div class="social-login">
                    <a href="{{ route('auth.google') }}">
                    <img src="{{ asset('images/google.png') }}" alt="Google Icon"> Login with Google
                    </a>
                </div>
            </form>

            <div class="text-center">
                Don't have an account? <a href="{{ route('register') }}">Sign up</a>
            </div>
        </div>
    </div>
</div>
@endsection
