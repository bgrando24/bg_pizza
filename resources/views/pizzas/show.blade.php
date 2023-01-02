
@extends('layouts.app')

    @section('content')
    
        <div class="wrapper pizza-details">
            <h1 class="center">
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
                <p class="no-toppings">No extra toppings</p>
            @else
            <ul>
                @foreach ($pizza->toppings as $topping)
                    <li>{{ $topping }}</li>    
                @endforeach 
            </ul>
            @endif
        </div>

        <!-- complete order button (delete from list) -->
        <form action="{{ route("pizzas.destroy", $pizza->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="complete-order-wrapper">
                <button>Complete Order</button>
            </div>
            
        </form>


        <a href='{{ route("pizzas.index") }}' class="back"> <- Back to all pizzas</a>

    @endsection