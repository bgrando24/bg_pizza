<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// get all pizzas
Route::get('/pizzas', [PizzaController::class, 'index']);

// send user to the pizza order view
Route::get('/pizzas/create', [PizzaController::class, 'create']);

// get pizza order by id and show in view
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);

// for posting new order to db
Route::post('/pizzas', [PizzaController::class, 'store']);

// for completing (deleting) an order and removing from db
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);