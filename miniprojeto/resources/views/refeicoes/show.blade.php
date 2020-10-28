@extends('layout')

@section('content')
    <section class="wrapper">
        <div class="inner">
            <h1 class="titulo">Verificar Refeição</h1>
            <div class="row 200%">
                <div class="12u">
                    <div class="row uniform">
                        <div class="12u$">
                            <label for="altura_dia">Altura do Dia:</label>
                            <div>{{ $refeicao->altura_dia }}</div>
                        </div>
                        <div class="12u$">
                            <label for="data_refeicao">Data da Refeição:</label>
                            <div>{{ $refeicao->data_refeicao }}</div>
                        </div>
                        <div class="12u$">
                            <label for="pratos">Pratos:</label>
                            <ul>
                                @foreach ($refeicao->pratos as $prato)
                                    <li>
                                        Nome: {{ $prato->nome }} <br>
                                        Calorias: {{ $prato->cal }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="12u$">
                            <label for="total_cal">Total Calorias:</label>
                            <div>{{ $refeicao->total_cal }}</div>
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <label for="notas">Descrição:</label>
                            <div>{{ $refeicao->notas }}</div>
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <ul class="actions">
                                <form method="POST" action="/refeicoes/{{ $refeicao->id }}">
                                    @csrf
                                    @method('delete')
                                    <li><input type="button" value="Editar" /></li>
                                    <li><input type="submit" value="Eliminar" class="alt" /></li>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
