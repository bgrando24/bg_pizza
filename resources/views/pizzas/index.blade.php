
@extends('layouts.app')

    @section('content')

    <div class="wrapper pizza-index center">

        <h1>All Orders</h1>

        <!-- If redirected here from deleting order, show confirmation message -->
        <p class="delete-message">{{ session('message') }}</p>

        <!-- List all pizza orders -->
        @if (count($pizzas) == 0)
            <p>No orders to show</p>
        @endif
        @foreach($pizzas as $pizza)
            <div class="pizza-item">
                
                <h4>
                    <a href="{{ route("pizzas.show", $pizza->id) }}">
                        <img class="pizza-icon" src="/img/pizza.png" alt="pizza icon"> 
                        {{ $pizza->name }} - {{ $pizza->type }} 
                    </a>
                </h4>
                
            </div>
        @endforeach

    </div>

    @endsection