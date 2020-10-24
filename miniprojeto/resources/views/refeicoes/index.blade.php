@extends('layout')

@section('content')
<section id="three" class="wrapper">
    <h1 class="titulo">Refeições </h1>
    <div class="inner" style="text-align: right;">
        <a href="refeicoes/novo" class="button special small">Adicionar</a>
    </div>
    <div class="inner flex flex-3">
        @foreach($refeicaos as $refeicao)
        <div class="flex-item box">
            <div class="content">
                <h3>{{ $refeicao->altura_dia }}</h3>
                <h3>{{ $refeicao->data_refeicao }}</h3>
                <p>{{ $refeicao->notas}}</p>
                <h4>{{ $refeicao->total_cal}} cals</h4>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection