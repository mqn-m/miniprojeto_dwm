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
                                <input class="" type="text" name="nome" id="nome" value="{{ old('nome') }}"
                                    placeholder="Nome" required autofocus  maxlength="30"/>
                                @error('nome')
                                    <p class="erro">{{ $errors->first('nome') }}</p>
                                @enderror
                            </div>

                            <div class="6u$ 12u$(xsmall) @error('cal') input_erro @enderror">
                                <label for="cal">Calorias:</label>
                                <input type="number" name="cal" id="cal" value="{{ old('nome') }}" placeholder="Calorias"
                                    min="0"  max="100000" required />
                                @error('cal')
                                    <p class="erro">{{ $errors->first('cal') }}</p>
                                @enderror
                            </div>

                            <div class="12u$ @error('nota') input_erro @enderror">
                                <label for="nota">Descrição:</label>
                                <textarea name="nota" id="nota" placeholder="Descrição" value="{{ old('nota') }}" rows="6"
                                    required maxlength="100"></textarea>
                                @error('nota')
                                    <p class="erro">{{ $errors->first('nota') }}</p>
                                @enderror
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
