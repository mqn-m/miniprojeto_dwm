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

                            <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" required
                                autocomplete="name" readonly>

                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="12u$">
                            <label for="email" class="">{{ __('E-Mail') }}</label>


                            <input id="email" type="email" name="email" value="{{ Auth::user()->email }}" required
                                autocomplete="email" readonly>


                        </div>
                    </div>

                    <div class="row uniform">
                        <div class="12u$">
                            <label for="idade" class="">{{ __('Idade') }}</label>


                            <input id="idade" type="number" name="idade" value="{{ Auth::user()->idade }}" required
                                autocomplete="idade" readonly>


                        </div>
                    </div>

                    <div class="row uniform">
                        <div class="12u$">
                            <label for="peso" class="">{{ __('Peso') }}</label>


                            <input id="peso" type="number" step="0.010" name="peso" value="{{ Auth::user()->peso }}"
                                required autocomplete="peso" readonly>


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
