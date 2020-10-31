@extends('layout')

@section('content')
<section id="three" class="wrapper">
    <h1 class="titulo">Refeições </h1>
    <div class="inner" style="text-align: right;">
        <a href="refeicoes/novo" class="button special small">Adicionar</a>
    </div>
    
    <div class="inner">
        @if(count($refeicaos) === 0)
        <h3 style="color: #727a82;" class="sem-pratos-refeicoes">Não tem refeições criadas ainda</h3>
        @else
        @foreach($refeicaos as $refeicao)
        <div class="cartao">
            <a href="/refeicoes/{{ $refeicao->id }}">
                <div class="content">
                    <h3>{{ $refeicao->altura_dia }}</h3>
                    <h3>{{ $refeicao->data_refeicao }}</h3>
                    <p>{{ $refeicao->notas}}</p>
                    <h4>{{ $refeicao->total_cal}} cals</h4>
                    <form class="form_apagar"method="POST" action="/refeicoes/{{ $refeicao->id }}">
                        @csrf
                        @method('delete')
                        <a href="refeicoes/{{ $refeicao->id }}/editar/" class=" icon fa-edit botao editar" title="Editar"></a>
                        <input type="submit" id="sub" name="sub" value="" class="botao apagar" title="Eliminar">
                        <img src="/images/trash.png" alt="Eliminar" class="UAreTrash">
                    </form>
                </div>
            </a>
        </div>
        @endforeach
        @endif
    </div>
    <div class="paginacao">{{ $refeicaos->links("pagination::bootstrap-4") }}</div>
</section>
@endsection