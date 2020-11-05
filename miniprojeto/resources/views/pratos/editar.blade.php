@extends('layout')

@section('content')
<section class="wrapper">
    <div class="inner">
        <h1 class="titulo">Editar Prato</h1>
        <div class="row 200%">
            <div class="12u">
            <form method="POST" action="/pratos/{{ $pratos->id }}">
                @csrf
                @method('PUT')

                    <div class="row uniform">
                        <div class="6u 12u$(xsmall) @error('nome') input_erro @enderror">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" value="{{ $pratos->nome }}" />
                            @error('nome')
                                <p class="erro">{{$errors->first('nome')}}</p>
                            @enderror
                        </div>
                        
                        <div class="6u$ 12u$(xsmall) @error('cal') input_erro @enderror">
                            <label for="cal">Calorias:</label>
                            <input type="number" name="cal" id="cal" value="{{ $pratos->cal }}" min="0" />
                            @error('cal')
                                <p class="erro">{{$errors->first('cal')}}</p>
                            @enderror
                        </div>
                        
                        <div class="12u$">
                            <label for="nota">Descrição:</label>
                            <textarea name="nota" id="nota"  rows="6">{{ $pratos->nota }}</textarea>
                        </div>
                        
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Guardar" /></li>
                                <li><a href="/pratos"><input type="button" value="Cancelar" class="alt"></a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection