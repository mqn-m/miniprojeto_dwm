@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perfil') }}</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" readonly>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" readonly>
                                

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('Idade') }}</label>

                            <div class="col-md-6">
                                <input id="idade" type="number" name="idade" value="{{ Auth::user()->idade }}" required autocomplete="idade" readonly>
                                

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>

                            <div class="col-md-6">
                                <input id="peso" type="number" step="0.010" name="peso" value="{{ Auth::user()->peso }}" required autocomplete="peso" readonly>
                                

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a href="/perfil/{{ Auth::user()->id }}/edit"><button class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button></a>
                            </div>
                        </div><br> <span>
                            <form method="POST" action="/perfil/{{Auth::user()->id}}">
                            @csrf
                            @method('DELETE')
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Apagar') }}
                                </button>
                            </div>
                        </div>
                        </form>
                        </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
