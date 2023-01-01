{{-- using the layout file --}}
@extends('layouts.layout')

    <!-- defines where to start and end the layout file -->
    @section('content')
    <div class="relative flex items-top justify-center min-h-screen text-white bg-gray-100 sm:items-center py-4 sm:pt-0">
        

        <div class="d-flex flex-column text-center">
            <!-- Outputting id wildcard -->
            <h1 class="content title">Pizzas - {{ $id }}</h1>
            
        </div>

    </div>
    @endsection