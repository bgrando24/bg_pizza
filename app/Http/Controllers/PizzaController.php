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
    
        return view('pizza', [
            'pizzas' => $pizzas,
        ]);
    }


    // 'id' wildcard
    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
