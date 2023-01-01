{{-- using the layout file --}}
@extends('layouts.layout')

    <!-- defines where to start and end the layout file -->
    @section('content')
    <div class="relative flex items-top justify-center min-h-screen text-white bg-gray-100 sm:items-center py-4 sm:pt-0">
        

        <div class="d-flex flex-column text-center">
            <h1 class="content title">Pizzas</h1>
            <p>{{ $name }}</p>
            <p>{{ $age }}</p>
            <!-- accessing variables from the route handler for this view -->
            

            <!-- Blade directives -->
            @foreach($pizzas as $pizza)
                <p>{{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}</p>
            @endforeach

        </div>

    </div>
    @endsection