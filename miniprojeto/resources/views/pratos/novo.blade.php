@extends('layout')

@section('content')
<section class="wrapper">
    <div class="inner">
        <h1 class="titulo">Adicionar Prato</h1>
        <div class="row 200%">
            <div class="12u">
                <form method="post" action="#">
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="nome" id="nome" value="" placeholder="Name" />
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <input type="number" name="calorias" id="calorias" value="" placeholder="Calorias"
                                min="0" />
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <textarea name="message" id="message" placeholder="Descrição" rows="6"></textarea>
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