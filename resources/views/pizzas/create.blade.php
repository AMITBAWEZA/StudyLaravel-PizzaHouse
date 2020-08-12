@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create Your Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your name</label>
            <input type="text" name="name" id="name">
            <label for="type">Select Pizza Type</label>
            <select name="type" id="type">
                <option value="Veg Supreme">Veg Supreme</option>
                <option value="Volcano">Volcano</option>
            </select>
            <label for="base">Select Pizza Base</label>
            <select name="base" id="base">
                <option value="Cheesy Crust">Cheesy Crust</option>
                <option value="Garlic Crust">Garlic Crust</option>
            </select>
            <fieldset>
                <label for="">Extra Toppings:</label>
                <input type="checkbox" name="toppings[]" value="Mushroom">Mushroom</br>
                <input type="checkbox" name="toppings[]" value="Garlic">Garlic</br>
                <input type="checkbox" name="toppings[]" value="Olives">Olives</br>
            </fieldset>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
@endsection        
  