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

    public function store(){
      // error_log(request('name'))

      $pizza = new Pizza();
      $pizza->name = request('name');
      $pizza->type = request('type');
      $pizza->base = request('base');
      $pizza->toppings = request('toppings');

      $pizza->save();

      return redirect('/')->with('msg', "Thanks For the order");
     
    }
}
