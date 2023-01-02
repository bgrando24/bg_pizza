
@extends('layouts.layout')

    @section('content')
    <div class="relative flex items-top justify-center min-h-screen text-white bg-gray-100 sm:items-center py-4 sm:pt-0">
        

        <div class="d-flex flex-column text-center">
            <h1 class="content title">Pizzas</h1>
            
            <!-- If redirected here from deleting order, show confirmation message -->
            <p class="delete-message">{{ session('message') }}</p>

            <!-- List all pizza orders -->
            @foreach($pizzas as $pizza)
                <div>
                    {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
                </div>
            @endforeach

        </div>

    </div>
    @endsection