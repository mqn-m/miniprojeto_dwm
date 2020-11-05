@extends('layout')

@section('content')
    <section id="Pratos" class="wrapper">
        <div class="inner" style="text-align: right;">
            <h1 class="titulo">Pratos </h1>
            <div class="12u$">
                <ul class="actions">
                    <li><input type="button" class="small special" value="Adicionar" onclick="location.href='/pratos/novo'"></li>
                </ul>
            </div>
        </div>
        <div class="inner">
            @if (count($pratos) === 0)
                <h3 style="color: #727a82;" class="sem-pratos-refeicoes">Não tem pratos criados ainda</h3>
            @else
                <div class="gridMasterLOL">
                    @foreach ($pratos as $prato)
                        <div class="cartao">
                            <div class="content">
                                <h3>{{ $prato->nome }}</h3>
                                <p>{{ $prato->nota }}</p>
                                <h4>{{ $prato->cal }} cals</h4>
                                <form class="form_apagar" method="POST" action="/pratos/{{ $prato->id }}"
                                    onsubmit="return confirm('Certeza que quer eliminar este prato?')">
                                    @csrf
                                    @method('delete')
                                    <a href="pratos/{{ $prato->id }}/editar/" class=" icon fa-edit botao editar"
                                        title="Editar"></a>
                                    <input type="submit" id="sub" name="sub" value="" class="botao apagar" title="Eliminar">
                                    <img src="/images/trash.png" alt="Eliminar" class="UAreTrash">
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="paginacao">{{ $pratos->links('pagination::bootstrap-4') }}</div>

    </section>
@endsection
