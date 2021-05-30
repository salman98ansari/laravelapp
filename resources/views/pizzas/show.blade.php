@extends('layout.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order From {{$pizzass->name}}</h1>
    <p class="type">Pizza Type - {{$pizzass->type}}</p>
    <p class="base">Pizza Base - {{$pizzass->base}}</p>
    <p class="toppings">Extra Toppings:</p>
    <ul>
        @foreach ($pizzass->toppings as $topping)
            <li>{{$topping}}</li>            
        @endforeach
    </ul>
    <form action="/pizzas/{{$pizzass->id}}" method="POST">
        @csrf
        @method('DELETE');
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizzas">->Back to all pizzas</a>

@endsection
        
