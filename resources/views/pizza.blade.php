{{-- using the layout file --}}
@extends('layouts.layout')

    <!-- defines where to start and end the layout file -->
    @section('content')
    <div class="relative flex items-top justify-center min-h-screen text-white bg-gray-100 sm:items-center py-4 sm:pt-0">
        

        <div class="d-flex flex-column text-center">
            <h1 class="content title">Pizzas</h1>
            
            

            <!-- Blade directives -->
            @foreach($pizzas as $pizza)
                <div>
                    {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
                </div>
            @endforeach

        </div>

    </div>
    @endsection