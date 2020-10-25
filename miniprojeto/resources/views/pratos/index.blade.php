@extends('layout')

@section('content')
<section id="Pratos" class="wrapper">
    <div class="inner" style="text-align: right;">
        <h1 class="titulo">Pratos </h1>
        <a href="pratos/novo" class="button special small">Adicionar</a>
    </div>
    <div class="inner">
        @foreach($pratos as $prato)
            <div class="cartao">
                <div class="content">
                    <h3>{{ $prato->nome }}</h3>
                    <p>{{ $prato->nota }}</p>
                    <h4>{{ $prato->cal }} cals</h4>
                <a href="pratos/{{ $prato->id }}/editar/" class=" icon fa-edit botao editar" title="Editar"></a>
                <a href="" class=" icon fa-trash botao apagar" title="Eliminar"></a>
                </div>
            </div>
        @endforeach
    </div>

</section>
@endsection