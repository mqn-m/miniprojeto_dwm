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
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="nome" id="nome" value="{{ $pratos->nome }}" required/>
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <input type="number" name="cal" id="cal" value="{{ $pratos->cal }}" min="0" required/>
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <textarea name="nota" id="nota"  rows="6" required>{{ $pratos->nota }}</textarea>
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Guardar" /></li>
                                <li><input type="button" value="Cancelar" class="alt" href="pratos/index"/></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection