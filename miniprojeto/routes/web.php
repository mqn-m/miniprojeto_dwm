<?php

use Illuminate\Support\Facades\Auth;
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


// [Auth::class]
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    

    //pratos

    Route::get('/pratos', 'App\Http\Controllers\PratoController@index');
    Route::post('/pratos', 'App\Http\Controllers\PratoController@store');
    Route::get('/pratos/novo', 'App\Http\Controllers\PratoController@create');
    Route::get('/pratos/{pratos}/editar/', 'App\Http\Controllers\PratoController@edit');
    Route::put('/pratos/{pratos}', 'App\Http\Controllers\PratoController@update');
    Route::delete('/pratos/{pratos}', 'App\Http\Controllers\PratoController@destroy');

    //refeicoes

    Route::get('/refeicoes', 'App\Http\Controllers\RefeicaoController@index');
    Route::get('/refeicoes/novo', 'App\Http\Controllers\RefeicaoController@create');
    Route::post('/refeicoes', 'App\Http\Controllers\RefeicaoController@store');  //send form with post
    Route::get('/refeicoes/{refeicao}', 'App\Http\Controllers\RefeicaoController@show');  //show um recurso
    Route::put('/refeicoes/{refeicao}', 'App\Http\Controllers\RefeicaoController@update');
    Route::delete('/refeicoes/{refeicao}', 'App\Http\Controllers\RefeicaoController@destroy');
    Route::get('/refeicoes/{refeicao}/editar', 'App\Http\Controllers\RefeicaoController@edit');

    //perfil

    Route::get('/perfil', 'App\Http\Controllers\UserController@show');
    Route::get('/perfil/{user}/edit', 'App\Http\Controllers\UserController@edit');
    Route::put('/perfil/{user}', 'App\Http\Controllers\UserController@update');
    Route::delete('/perfil/{user}', 'App\Http\Controllers\UserController@destroy');


    //estatisticas
    Route::get('/estatisticas', 'App\Http\Controllers\EstatisticaController@index');


    Route::fallback(function(){
        return view('errors.404');
    });
    
});

//users
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
