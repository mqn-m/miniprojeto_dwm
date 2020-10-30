@extends('layout')

@section('content')
<section class="wrapper">
    <div class="inner">
        <h1 class="titulo">Editar Refeição</h1>
        <div class="row 200%">
            <div class="12u">
                <form method="POST" action="/refeicoes/{{ $refeicao->id }}">
                    @csrf
                    @method('PUT')
                    <div class="row uniform">
                        <div class="12u$">
                            <label for="altura_dia">Altura do Dia:</label>
                            <select id="altura_dia" name="altura_dia" required value="{{ $refeicao->altura_dia }}">
                              <option value="Pequeno-Almoço">'Pequeno-Almoço'</option>
                              <option value="Almoço">Almoço</option>
                              <option value="Jantar">Jantar</option>
                              <option value="Lanche manhã">Lanche manhã</option>
                              <option value="Lanche tarde">Lanche tarde</option>
                              <option value="Ceia">Ceia</option>
                            </select>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <label for="data_refeicao">Data da Refeição:</label>
                            <input type="date" name="data_refeicao" id="data_refeicao" value="{{ $refeicao->data_refeicao }}" placeholder="Data Refeição" required />
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <label for="total_cal">Total Calorias:</label>
                            <input type="number" name="total_cal" id="total_cal" value={{ $refeicao->total_cal }} placeholder="Calorias"
                                min="0" required />
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <label for="notas">Descrição:</label>
                            <textarea name="notas" id="notas"  rows="6" >{{ $refeicao->notas }}</textarea>
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Guardar" /></li>
                                <li><input type="button" value="Cancelar" class="alt"/></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection