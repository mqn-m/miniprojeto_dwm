@extends('layout')

@section('content')
<div class="wrapper">
    <div class="inner">
        <h1 class="titulo">{{ __('Register') }}</h1>
        <div class="content">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row uniform">
                    
                    <div class="6u 12u$(xsmall) @error('name') input_erro @enderror">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                                <p class="erro" role="alert"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="6u 12u$(xsmall) @error('email') input_erro @enderror">
                        <label for="email">{{ __('E-Mail Address') }}</label>
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
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" name="password_confirmation"  required autocomplete="new-password">
                    </div>


                    <div class="12u$" style="text-align: center">
                        <ul class="actions">
                            <li><input type="submit" value="{{ __('Register') }}"></li>
                            <li><input type="button" value="Cancelar" class="alt" onclick="location.href='/login'" /></li>
                        </ul>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>













{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('Idade') }}</label>

                            <div class="col-md-6">
                                <input id="idade" type="number" class="form-control @error('idade') is-invalid @enderror" name="idade" value="{{ old('idade') }}" required autocomplete="idade">

                                @error('idade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>

                            <div class="col-md-6">
                                <input id="peso" type="number" step="0.010" class="form-control @error('peso') is-invalid @enderror" name="peso" value="{{ old('peso') }}" required autocomplete="peso">

                                @error('peso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
