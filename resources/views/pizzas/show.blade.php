
@extends('layouts.layout')

    @section('content')
    
        <div class="wrapper pizza-details">
            <h1>
                Order for {{ $pizza->name }}
            </h1>
            <p class="type">
                Type - {{ $pizza->type }}
            </p>
            <p class="base">
                Base - {{ $pizza->base }}
            </p>
            <p class="toppings">
                Extra Toppings:
            </p>

            @if($pizza->toppings == null)
                <p>No extra toppings</p>
            @else
            <ul>
                @foreach ($pizza->toppings as $topping)
                    <li>{{ $topping }}</li>    
                @endforeach 
            </ul>
            @endif
        </div>

        <!-- complete order button (delete from list) -->
        <form action="/pizzas/{{ $pizza->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
        

        <a href='/pizzas' class="back"> <- Back to all pizzas</a>

    @endsection