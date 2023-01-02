@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body d-flex flex-column items-center justify-between">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p class="my-3 view-orders"><a href="{{ route("pizzas.index") }}">View Orders</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
