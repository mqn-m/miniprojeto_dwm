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


Route::get('/pratos', 'App\Http\Controllers\PratoController@index');
// Route::get('lista', 'App\Http\Controllers\UserController@lista');
Route::get('/users', 'App\Http\Controllers\UserController@store');
Route::get('/users/novo', 'App\Http\Controllers\UserController@create');
// Route::get('/users/{user}/edit', 'App\Http\Controllers\UserController@edit');



Route::get('/pratos.novo', function () {
    return view('pratos.novo');
});


//refeicoes

Route::get('/refeicoes', 'App\Http\Controllers\RefeicaoController@index');
Route::get('/refeicoes/novo', 'App\Http\Controllers\RefeicaoController@create');

//users
Route::get('/users', 'App\Http\Controllers\UserController@store');
Route::get('/users/novo', 'App\Http\Controllers\UserController@create');