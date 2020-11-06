@extends('layout')

@section('content')
    <div class="wrapper">
        <div class="">
            <div class="inner">
                <h1 class="titulo">{{ __('Perfil') }}</h1>

                <div class="content">

                    <div class="row uniform">
                        <div class="12u$">
                            <label for="name" class="">{{ __('Nome') }}</label>

                            <div id="name" name="name">{{ Auth::user()->name }}</div>

                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="12u$">
                            <label for="email" class="">{{ __('E-Mail') }}</label>


                            <div id="email" name="email">{{ Auth::user()->email }}</div>


                        </div>
                    </div>

                    <div class="row uniform">
                        <div class="12u$">
                            <label for="idade" class="">{{ __('Idade') }}</label>


                            <div id="idade" name="idade">{{ Auth::user()->idade }}</div>


                        </div>
                    </div>

                    <div class="row uniform">
                        <div class="12u$">
                            <label for="peso" class="">{{ __('Peso') }}</label>


                            <div id="peso" step="0.010" name="peso">{{ Auth::user()->peso }}</div>


                        </div>
                    </div>
                    <br>

                    <div class="12u$">
                        <ul class="actions">
                            <form method="POST" action="/perfil/{{ Auth::user()->id }}">
                                @csrf
                                @method('DELETE')
                                <li><input type="button" value="{{ __('Editar') }}"
                                        onclick="location.href='/perfil/{{ Auth::user()->id }}/edit'" /></li>
                                <li>
                                    <input type="submit" class="alt" value="{{ __('Remover Conta') }}">
                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
