<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

// get all pizzas
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');

// send user to the pizza order view
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');

// get pizza order by id and show in view
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');

// for posting new order to db
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');

// for completing (deleting) an order and removing from db
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

// authentication
Auth::routes([
    'register' => false // prevents routes matching the key from generating
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
