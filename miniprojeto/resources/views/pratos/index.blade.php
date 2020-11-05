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
                    <form class="form_apagar"method="POST" action="/pratos/{{ $prato->id }}" onsubmit="return confirm('Certeza que quer eliminar este prato?')">
                        @csrf
                        @method('delete')
                        <a href="pratos/{{ $prato->id }}/editar/" class=" icon fa-edit botao editar" title="Editar"></a>
                        <input type="submit" id="sub" name="sub" value="" class="botao apagar" title="Eliminar">
                        <img src="/images/trash.png" alt="Eliminar" class="UAreTrash">
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <div class="paginacao">{{ $pratos->links("pagination::bootstrap-4") }}</div>

</section>
@endsection