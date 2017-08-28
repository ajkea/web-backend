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

Route::get('/todo',function () {
    return view('todo');
});
Auth::routes();
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get("todos", 'todos@index');
Route::get("todoVoltooid/{id}", 'todos@updateVoltooid');
Route::get("todoBezig/{id}", 'todos@updateTodo');

Route::get("todoVerwijderen/{id}", 'todos@destroy');

Route::post("todoToevoegen", 'todos@create');