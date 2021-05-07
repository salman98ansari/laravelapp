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
    //get data from db
    $pizzas = [
    ['type' => 'hawaiian', 'base' => 'cheesy crust'],
    ['type' => 'volcano', 'base' => 'garlic crust'],
    ['type' => 'veg supreme', 'base' => 'thin & crispy']
  ];

  // query parameter
    return view('pizzas', 
    ['pizzas' => $pizzas,
      'name' => request("name"),
      'age' => request('age'),
    ]
  );
    // return 'Pizzas';
    // return ['name' => "veg pizza" , "base" => "classic"];
});

Route::get('/pizzas/{id}', function ($id) {
  //use the $id varable to search into the db
  return view('details', ['id'=> $id]);
});
