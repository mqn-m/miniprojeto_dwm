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



// Route::get('lista', 'App\Http\Controllers\UserController@lista');
Route::get('/users', 'App\Http\Controllers\UserController@store');
Route::get('/users/novo', 'App\Http\Controllers\UserController@create');
// Route::get('/users/{user}/edit', 'App\Http\Controllers\UserController@edit');

//pratos

Route::get('/pratos', 'App\Http\Controllers\PratoController@index');
Route::post('/pratos','App\Http\Controllers\PratoController@store');
Route::get('/pratos/novo', 'App\Http\Controllers\PratoController@create');
Route::get('/pratos/{id}/editar/', 'App\Http\Controllers\PratoController@edit');
Route::put('/pratos/{id}', 'App\Http\Controllers\PratoController@update');

//refeicoes

Route::get('/refeicoes', 'App\Http\Controllers\RefeicaoController@index');
Route::get('/refeicoes/novo', 'App\Http\Controllers\RefeicaoController@create');

//users
Route::get('/users', 'App\Http\Controllers\UserController@store');
Route::get('/users/novo', 'App\Http\Controllers\UserController@create');