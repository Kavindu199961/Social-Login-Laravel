@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
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

                    <h2>{{ __('You are logged in!') }}</h2>
                    <p>Welcome to your dashboard.</p>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
