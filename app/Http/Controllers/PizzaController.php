<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\User;

class PizzaController extends Controller
{
    //Handles all pizza base routes

    // base route
    public function index() {
        
        // using Pizza model to get DB data
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'bbq chicken')->get();
        $pizzas = Pizza::latest()->get();
    
        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }


    // find the pizza by id wildcard
    public function show($id) {

        $pizza = Pizza::findOrFail($id);  // find by id or return 404 (fail)

        return view('pizzas.show', ['pizza' => $pizza]);
    }


    // create a new pizza order
    public function create() {
        return view('pizzas.create');
    }


    // store new order to db
    public function store() {
        
        // create new Pizza instance to store form data (accessible via request) in db
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->base = request('base');
        $pizza->type = request('type');
        $pizza->toppings = request('toppings');        

        $pizza->save(); // post to db

        return redirect('/')->with('message', 'Order received, thank you!');
    }


    // delete an order in db
    public function destroy($id) {
        $pId = $id; // saving id in separate variable to be used in confirmation message
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();   //delete from db

        return redirect('/pizzas')->with('message', "Pizza id $pId deleted");
    }
}
