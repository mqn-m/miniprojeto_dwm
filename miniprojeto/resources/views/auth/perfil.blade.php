@extends('layout')

@section('content')
    <div class="wrapper">
        <div class="inner">
            <h1 class="titulo">{{ __('Alterar Perfil') }}</h1>
            <div class="content">

                <form method="POST" action="/perfil/{{ Auth::user()->id }}">
                    @csrf
                    @method('PUT')

                    <div class="row uniform">
                        <div class="12u$">
                            <label for="name" class="">{{ __('Nome') }}</label>
                            <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" required
                                autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="row uniform">
                        <div class="12u$">
                            <label for="email" class="">{{ __('E-Mail') }}</label>
                            <input id="email" type="email" name="email" value="{{ Auth::user()->email }}" required
                                autocomplete="email">
                        </div>
                    </div>

                    <div class="row uniform">
                        <div class="12u$">
                            <label for="idade" class="">{{ __('Idade') }}</label>
                            <input id="idade" type="number" name="idade" value="{{ Auth::user()->idade }}" required
                                autocomplete="idade">
                        </div>
                    </div>

                    <div class="row uniform">
                        <div class="12u$">
                            <label for="peso" class="">{{ __('Peso') }}</label>
                            <input id="peso" type="number" step="0.010" name="peso" value="{{ Auth::user()->peso }}"
                                required autocomplete="peso">
                        </div>
                    </div>
                    <br>

                    <div class="actions">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Guardar Alterações') }}
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
