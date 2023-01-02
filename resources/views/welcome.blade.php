
{{-- using the layout file --}}
@extends('layouts.layout')

    @section('content')
        
    
    <div class=" img-background relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">

        {{-- <img src="/img/pizza-background.jpg" alt="pizza restaurant"> --}}
        

        <div class="content d-flex flex-column justify-between">

        <div>
            
            <div class="title">
                BG's Pizza
            </div>
        </div>
        
        <p class="message">{{ session('message') }}</p>

        <div class="nav d-flex flex-column items-center justify-content-evenly">

            @if (Route::has('login'))
            <div class=" d-flex flex-column items-center">
                @auth
                    <a href="{{ url('/home') }}" class=" text-center">Home</a>
                @else
                    <a href="{{ route('login') }}" >Log in</a>

                    @if (Route::has('register'))
                        <br>
                        <a href="{{ route('register') }}" >Register</a>
                    @endif
                @endauth
            </div>
            @endif

            <div>
                <a href="{{ route('pizzas.create') }}">Order Pizza</a>
            </div>
        </div>

        </div>

    </div>
    @endsection

