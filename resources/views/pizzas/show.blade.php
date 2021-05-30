@extends('layouts.app')

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
<div>
    <a href="/pizzas" class="back">->Back to all pizzas</a>
</div>


@endsection
        
