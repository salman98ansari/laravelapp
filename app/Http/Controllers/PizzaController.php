<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //
    public function index() {

        $pizzas = Pizza::all();  
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'indian')->get();
        // $pizzas = Pizza::latest()->get();      
    
        return view('pizzas.index', [
          'pizzas' => $pizzas,
        ]);
      }

    public function show($id){
      $pizza =  Pizza::findOrfail($id);
        return view('pizzas.show', ['pizzass'=> $pizza]);
    }

    public function create(){
      return view('pizzas.create');
    }
}
