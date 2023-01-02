
{{-- using the layout file --}}
@extends('layouts.layout')

    @section('content')
        
    
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content d-flex flex-column justify-between">

        <div>
            <a href="/">
                <img class="image" src="/img/pizza-house.png" alt="pizza house logo">
            </a>
            
            <div class="title d-flex justify-center">
                Gippsland's Greatest Pizza
            </div>
        </div>
        
        <p class="message">{{ session('message') }}</p>

        <div class="nav">
            <div>
                <a href="/pizzas/create">Order Pizza</a>
            </div>
        </div>

        </div>

    </div>
    @endsection

