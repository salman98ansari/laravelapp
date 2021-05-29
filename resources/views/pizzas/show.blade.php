@extends('layout.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order From {{$pizzass->name}}</h1>
    <p class="type">Pizza Type - {{$pizzass->type}}</p>
    <p class="base">Pizza Base - {{$pizzass->base}}</p>
</div>
<a href="/pizzas">->Back to all pizzas</a>

@endsection
        
