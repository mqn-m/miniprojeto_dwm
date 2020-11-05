@extends('layout')

@section('content')
    <section class="wrapper">
        <div class="inner">
            <h1 class="titulo">{{ __('Alterar Perfil') }}</h1>
            <div class="row 200%">
                <div class="12u">
                    <form method="POST" action="/perfil/{{ Auth::user()->id }}">
                        @csrf
                        @method('PUT')

                        <div class="row uniform">
                            <div class="12u$">
                                <label for="name" class="">{{ __('Nome') }}</label>
                                <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" required
                                    autocomplete="name" autofocus>
                            </div>

                            <div class="12u$">
                                <label for="email" class="">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" name="email" value="{{ Auth::user()->email }}" required
                                    autocomplete="email">
                            </div>

                            <div class="12u$">
                                <label for="idade" class="">{{ __('Idade') }}</label>
                                <input id="idade" type="number" name="idade" value="{{ Auth::user()->idade }}" required
                                    autocomplete="idade">
                            </div>

                            <div class="12u$">
                                <label for="peso" class="">{{ __('Peso') }}</label>
                                <input id="peso" type="number" step="0.010" name="peso" value="{{ Auth::user()->peso }}"
                                    required autocomplete="peso">
                            </div>

                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" value="{{ __('Guardar Alterações') }}"></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
