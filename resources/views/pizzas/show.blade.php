@extends('layouts.app')

@section('content')

        <div class="flex-center position-ref full-height">
        
            <div class="content">
                <div class="title m-b-md">
                   Pizza Details 
                </div>
                <p>Order For - {{$pizza->name}}</p>
                <p>Type - {{$pizza->type}}</p>
                <p>Base - {{$pizza->base}}</p>
                <p><b>Toppings</b></p>
                @foreach($pizza->toppings as $toppings)
                <p>{{$toppings}}</p>
                @endforeach
            <form action="/pizza/{{$pizza->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete Order</button>
            </form>
                <a href="/pizzas"><- Back to all pizzas</a>
            </div>
        </div>
@endsection        
  