@extends('layout')

@section('content')
    <section id="Pratos" class="wrapper">
        <div class="inner" style="text-align: right;">
            <h1 class="titulo">Estatisticas </h1>
            <div class="12u$">
                <ul class="actions">
                    <li><input type="button" class="small special" value="Adicionar" onclick="location.href='/pratos/novo'"></li>
                </ul>
            </div>
        </div>
        <div class="inner">
            @if (count($estatisticas) === 0)
                <h3 style="color: #727a82;" class="sem-pratos-refeicoes">Não tem refeicoes criados ainda</h3>
            @else
                <div class="gridMasterLOL">
                    @foreach ($estatisticas as $estatistica)
                        <div class="cartao">
                            <div class="content">
                                <h3 style="word-break: break-all">{{ $estatistica->data_refeicao }}</h3>
                                <h4>{{ $estatistica->calorias }} cals</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        {{-- <div class="paginacao">{{ $pratos->links('pagination::bootstrap-4') }}</div> --}}

    </section>
@endsection