@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
        height: 80%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        width: 100%;
        max-width: 800px;
        padding: 0px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }


    .card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background: #007bff;
        color: white;
        font-size: 1.5em;
        text-align: center;
        padding: 15px;
        border-bottom: none;
        border-radius: 10px 10px 0 0;
    }

    .card-body {
        padding: 20px;
        text-align: center;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .user-info {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .user-info a {
        color: #007bff;
        font-weight: bold;
        text-decoration: none;
    }

    .user-info a:hover {
        text-decoration: underline;
    }

    .user-info .username {
        font-size: 1.2em;
    }

    .btn-logout {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-logout:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="user-info">
                        <span class="username">{{ Auth::user()->name }}</span>
                       

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>

                    <h2>{{ __('You are logged in!') }}</h2>
                    <p>Welcome to your dashboard.</p>
                    <a href="{{ route('logout') }}" class="btn-logout"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
