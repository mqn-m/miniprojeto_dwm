@extends('layout')


@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <br>
        <h1>Novo Utilizador</h1>

        <form method="POST" action="/users">

            <br><div class="field">
        <label for="label" for="nome">Nome</label>

        <div class="control">

            <input class="input" type="text" name="nome" id="nome" value="{{ old('nome')}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="email">Email</label>

            <div class="control">
                <textarea class="textarea" name="email" id="email" value="{{ old('email')}}"></textarea>
            </div>
        </div>
        
        <div class= "field">
            <label class="label" for="pass">Palavra Pass</label>

            <div class="control">
            <input class="input" type="password" name="pass" id="pass" value="{{ old('pass')}}">
            </div>
        </div>

        <div class= "field">
            <label class="label" for="idade">Idade</label>

            <div class="control">
            <input class="input" type="number" pattern="[0-9]+$" name="idade" id="idade" value="{{ old('idade')}}">
            </div>
        </div>

        <div class= "field">
            <label class="label" for="peso">Peso</label>

            <div class="control">
            <input class="input" type="number" step="0.010" name="peso" id="peso" value="{{ old('peso')}}">
            </div>
        </div><br>
        
        <div class="field is-grouped">

            <div class="control">
                <button class="button is-link" type="submit">Criar Novo Utilizador</button>
            </div>
        </div>

        </form>
        
    </div>
    @endsection