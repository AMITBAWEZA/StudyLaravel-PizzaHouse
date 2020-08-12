<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pizzas', 'pizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('/pizza/create', 'pizzaController@create');
Route::get('/pizza/{id}', 'pizzaController@show')->name('pizzas.show')->middleware('auth');
Route::post('/pizzas', 'pizzaController@store');
Route::delete('/pizza/{id}','pizzaController@destroy')->middleware('auth');
Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
