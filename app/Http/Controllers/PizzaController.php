<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
    public function index(){
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
    }

    public function show($id){
        return view('details', ['id'=> $id]);
    }
}
