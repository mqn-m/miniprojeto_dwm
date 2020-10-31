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
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="nome" id="nome" value="" placeholder="Name" required/>
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <input type="number" name="cal" id="cal" value="" placeholder="Calorias" min="0" required/>
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <textarea name="nota" id="nota" placeholder="Descrição" rows="6" required></textarea>
                        </div>
                        <!-- Break -->
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