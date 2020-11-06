@extends('layout')

@section('style')
    <link rel="stylesheet" href="/vanillaSelectBox-master/vanillaSelectBox.css">
@endsection

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
                                    <option value="Pequeno-Almoço">Pequeno-Almoço</option>
                                    <option value="Almoço">Almoço</option>
                                    <option value="Jantar">Jantar</option>
                                    <option value="Lanche manhã">Lanche manhã</option>
                                    <option value="Lanche tarde">Lanche tarde</option>
                                    <option value="Ceia">Ceia</option>
                                </select>
                            </div>
                            <div class="12u$">
                                <label for="pratos">Pratos:</label>
                                <select id="pratos" name="pratos[]" multiple size="3">
                                    @foreach ($pratos as $prato)
                                        <option data-cals={{ $prato->cal }} value="{{ $prato->id }}" @foreach ($refeicao->pratos as $p)
                                            @if ($prato->id == $p->id)
                                                selected="selected"
                                            @endif
                                    @endforeach
                                    > Prato: {{ $prato->nome }} - {{ $prato->cal }} cals
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="6u 12u$(xsmall) @error('data_refeicao') input_erro @enderror">
                                <label for="data_refeicao">Data da Refeição:</label>
                                <input type="date" name="data_refeicao" id="data_refeicao"
                                    value="{{ $refeicao->data_refeicao }}" placeholder="Data Refeição" required />
                                @error('data_refeicao')
                                    <p class="erro">{{ $errors->first('data_refeicao') }}</p>
                                @enderror
                            </div>
                            <div class="6u$ 12u$(xsmall) @error('total_cal') input_erro @enderror">
                                <label for="total_cal">Total Calorias:</label>
                                <input type="number" name="total_cal" id="total_cal" value={{ $refeicao->total_cal }}
                                    placeholder="Calorias" min="0" max="1000000" required />
                                @error('total_cal')
                                    <p class="erro">{{ $errors->first('total_cal') }}</p>
                                @enderror
                            </div>
                            <!-- Break -->
                            <div class="12u$">
                                <label for="notas">Descrição:</label>
                                <textarea name="notas" id="notas" rows="6" maxlength="100">{{ $refeicao->notas }} </textarea>
                            </div>
                            <!-- Break -->
                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" value="Guardar" /></li>
                                    <li><input type="button" value="Cancelar" class="alt"
                                            onclick="location.href='/refeicoes/{{ $refeicao->id }}'" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection


@section('scripts')
    <script src="/vanillaSelectBox-master/vanillaSelectBox.js"></script>
    <script src="/js/script_refeicoes.js"></script>
    <script>
        let mySelect = new vanillaSelectBox("#pratos");

    </script>
@endsection
