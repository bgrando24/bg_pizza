
@extends('layouts.app')

@section('content')

    <div class="wrapper create-pizza">
        <h1>Order a pizza</h1>

        <form action="{{ route('pizzas.store') }}" method="POST">
            <!-- cross-site request forgery -->
            @csrf

            <!-- order name -->
            <label for="name">Your name</label>
            <input type="text" id="name" name="name" required>

            <!-- pizza type -->
            <label for="type">Choose pizza type</label>
            <select name="type" id="type" required>
                <option value="margherita">Margherita</option>
                <option value="bbq chicken">BBQ Chicken</option>
                <option value="garlic">Garlic</option>
                <option value="meat lovers">Meat Lovers</option>
                <option value="vegetarian">Vegetarian</option>
            </select>

            <!-- pizza base -->
            <label for="base">Choose pizza base</label>
            <select name="base" id="base" required>
                <option value="thin">Thin</option>
                <option value="regular">Regular</option>
                <option value="extra thick">Extra Thick</option>
            </select>

            <!-- pizza toppings -->
            <fieldset>
                <label>Extra Toppings</label>
                <input type="checkbox" name='toppings[]' value="mushroom">Mushroom
                <input type="checkbox" name='toppings[]' value="cheese">Cheese
                <input type="checkbox" name='toppings[]' value="olives">Olives
                <input type="checkbox" name='toppings[]' value="capsicum">Capsicum
                <input type="checkbox" name='toppings[]' value="anchovies">Anchovies
            </fieldset>

            <input type="submit" value="Order Pizza">

        </form>

    </div>

@endsection