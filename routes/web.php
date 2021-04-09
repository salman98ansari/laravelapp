<?php

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

Route::get('/pizzas', function () {
    $pizza_data = [
        'name' => "veg pizza" ,
        "base" => "classic",
        "price" => 150,
    ];
    return view('pizzas' , $pizza_data);
    // return 'Pizzas';
    // return ['name' => "veg pizza" , "base" => "classic"];
});
