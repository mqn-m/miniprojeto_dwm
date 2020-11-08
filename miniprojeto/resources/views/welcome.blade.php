@extends('layout')

@section('content')
    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <h1>És o que Comes</h1>
            <p>Comece a fazer tracking da sua alimentação<br/>para depois começar a melhorar os seus comportamentos
                alimentares</p>
            <ul class="actions">
                @if(Auth::check())
                <li><a href="/pratos" class="button scrolly">Pratos</a></li>
                <li><a href="/refeicoes" class="button scrolly">Refeições</a></li>
                @else
                <li><a href="/login" class="button scrolly">Comece Já!</a></li>
                @endif
            </ul>
        </div>
    </section>
    <section id="one" class="wrapper info">
        <div class="inner flex flex-3">
            <div class="flex-item left">
                <div>
                    <a href="/pratos"><h3>Pratos Personalizaveis</h3></a>
                    <p>Registe pratos que come com frequência<br />para depois rapidamente adicioná-los a uma refeição </p>
                </div>
                <div>
                    <a href="/refeicoes"><h3>Registo de Refeições</h3></a>
                    <p>Registe todas as suas refeições diáriamente para melhorar a sua expêriencia de tracking</p>
                </div>
            </div>
            <div class="flex-item image fit round">
                <img src="images/Flogo.png" alt="" />
            </div>
            <div class="flex-item right">
                <div>
                    <a href="estatisticas"><h3>Visualizar Estatísticas</h3></a>
                    <p>Após registar algumas refeições<br /> poderá visualizar estatísticas da sua alimentação</p>
                </div>
                <div>
                    <h3>Receba Dicas</h3>
                    <p>Receba dicas dos nossos professionais<br />entre em contacto pelo nosso email</p>
                </div>
            </div>
        </div>
    </section>
@endsection
