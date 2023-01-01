<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


// Using pizza controller for index view
Route::get('/pizza', [PizzaController::class, 'index']);


// use the id variable to query the db for a record
// Using pizza controller for id wildcard
Route::get('/pizza/{id}', [PizzaController::class, 'show']);
