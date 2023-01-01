<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// a GET request handler, determines what view to fetch
Route::get('/pizza', function () {
    // pretend we get data from a DB and are passing it into an array in the view below
    
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
});