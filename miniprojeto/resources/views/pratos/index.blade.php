@extends('layout')

@section('content')
<section id="three" class="wrapper">
    <h1 class="titulo">Pratos </h1>
    <div class="inner" style="text-align: right;">
        <a href="pratos.novo" class="button special small">Adicionar</a>
    </div>
    <div class="inner flex flex-3">
        @foreach($pratos as $prato)
        <div class="flex-item box">
            <div class="content">
                <h3>{{ $prato->nome }}</h3>
                <p>{{ $prato->nota}}</p>
                <h4>{{ $prato->cal}} cals</h4>

            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection