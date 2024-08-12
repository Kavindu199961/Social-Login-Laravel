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

    .row.mb-3 {
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 5px;
        padding: 10px;
        width: 95%;
        font-size: 1em;
        border: 1px solid #ddd;
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
