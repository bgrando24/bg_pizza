
@extends('layouts.app')

    @section('content')

    <div class="wrapper pizza-index">

        <h1>All Orders</h1>

        <!-- If redirected here from deleting order, show confirmation message -->
        <p class="delete-message">{{ session('message') }}</p>

        <!-- List all pizza orders -->
        @foreach($pizzas as $pizza)
            <div class="pizza-item">
                <img src="/img/pizza.png" alt="pizza icon">
                <h4>
                    <a href="/pizzas/{{ $pizza->id }}"> {{ $pizza->name }} - {{ $pizza->type }} </a>
                </h4>
                
            </div>
        @endforeach

    </div>

    @endsection