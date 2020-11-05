@extends('layout')

@section('content')
<section class="wrapper">
    <div class="inner">
        <h1 class="titulo">Adicionar Prato</h1>
        <div class="row 200%">
            <div class="12u">
                <form method="POST" action="/pratos">
                    @csrf
                    <div class="row uniform">


                        <div class="6u 12u$(xsmall) @error('nome') input_erro @enderror">
                            <label for="nome">Nome:</label>
                        <input class="" type="text" name="nome" id="nome" value="{{old('nome')}}" placeholder="Nome"/>
                            @error('nome')
                                <p class="erro">{{$errors->first('nome')}}</p>
                            @enderror
                        </div>

                        <div class="6u$ 12u$(xsmall) @error('cal') input_erro @enderror">
                            <label for="cal">Calorias:</label>
                            <input type="number" name="cal" id="cal" value="{{old('nome')}}" placeholder="Calorias" min="0"/>
                            @error('cal')
                                <p class="erro">{{$errors->first('cal')}}</p>
                            @enderror
                        </div>

                        <div class="12u$">
                            <label for="nota">Descrição:</label>
                            <textarea name="nota" id="nota" placeholder="Descrição" value="{{old('nome')}}" rows="6"></textarea>
                        </div>
                        
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Guardar" /></li>
                                <li><a href="/pratos"><input type="button" value="Cancelar" class="alt" /></a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection