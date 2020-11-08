@extends('layout')

@section('content')
<div class="wrapper">
    <div class="inner">
        <h1 class="titulo">{{ __('Registo') }}</h1>
        <div class="content">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row uniform">
                    
                    <div class="6u 12u$(xsmall) @error('name') input_erro @enderror">
                        <label for="name">{{ __('Nome') }}</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                                <p class="erro" role="alert"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="6u 12u$(xsmall) @error('email') input_erro @enderror">
                        <label for="email">{{ __('E-Mail') }}</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                <p class="erro" role="alert"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="6u 12u$(xsmall) @error('idade') input_erro @enderror">
                        <label for="idade">{{ __('Idade') }}</label>
                        <input id="idade" type="number" name="idade" value="{{ old('idade') }}" min="0" required autocomplete="idade">
                        @error('idade')
                                <p class="erro" role="alert"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="6u 12u$(xsmall) @error('peso') input_erro @enderror">
                        <label for="peso">{{ __('Peso') }}</label>
                        <input id="peso" type="number" name="peso" value="{{ old('peso') }}" step="0.1" min="20" required autocomplete="peso">
                        @error('peso')
                                <p class="erro" role="alert"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="6u 12u$(xsmall) @error('password') input_erro @enderror">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password">
                        @error('password')
                                <p class="erro" role="alert"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="6u 12u$(xsmall)">
                        <label for="password-confirm">{{ __('Confirmar Password') }}</label>
                        <input id="password-confirm" type="password" name="password_confirmation"  required autocomplete="new-password">
                    </div>


                    <div class="12u$" style="text-align: center">
                        <ul class="actions">
                            <li><input type="submit" value="{{ __('Registar') }}"></li>
                            <li><input type="button" value="Cancelar" class="alt" onclick="location.href='/login'" /></li>
                        </ul>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
@endsection
