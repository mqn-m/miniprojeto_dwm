@extends('layout')

@section('content')
    <section id="Pratos" class="wrapper">
        <div class="inner" style="text-align: center">
            <h1 class="titulo">Estatísticas</h1>
            <div class="estatisticas">
                <p><span>Média por dia:</span> {{ $mediaDia }} cals</p>
                <p><span>Média por refeição:</span> {{ $mediaRefeicao }} cals</p>
                <p><span>Nº de dias:</span> {{ $numeroDias }}</p>
                <p><span>Nº de refeições:</span> {{ $numRefeicao }}</p>
            </div>

        </div>
        <div class="inner">
            @if (count($estatisticas) === 0)
                <h3 style="color: #727a82;" class="sem-pratos-refeicoes">Não tem refeicoes criados ainda</h3>
            @else
                <div class="gridMasterLOL gridMasterLOL2">
                    @foreach ($estatisticas as $estatistica)
                        <div class="cartao cartao2">
                            <div class="content">
                                <h3 style="word-break: break-all">{{ $estatistica->data_refeicao }}</h3>
                                <h4>{{ $estatistica->calorias }} cals</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="paginacao">{{ $estatisticas->links('pagination::bootstrap-4') }}</div>

    </section>
@endsection
