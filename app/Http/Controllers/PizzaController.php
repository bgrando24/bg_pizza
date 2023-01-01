<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //Handles all pizza base routes

    // base route
    public function index() {
        $pizzas = [
            ['type' => 'BBQ Chicken', 'base' => 'Thin'      ],
            ['type' => 'Cheese'     , 'base' => 'Regular'   ],
            ['type' => 'Margarita'  , 'base' => 'Thick'     ]
        ];
    
    
        return view('pizza', [
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age')
        ]);
    }


    // 'id' wildcard
    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
