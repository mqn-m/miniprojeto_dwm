        @extends('layout')

        @section('content')
        
        
        <!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>És o que Comes</h1>
					<p>Comece a fazer tracking da sua alimentação<br />para depois começar a melhorar os seus comportamentos alimentares</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Começar</a></li>
					</ul>
				</div>
			</section>

        <!-- One -->
        <section id="one" class="wrapper">
            <div class="inner flex flex-3">
                <div class="flex-item left">
                    <div>
                        <h3>Pratos Personalizaveis</h3>
                        <p>Pode registar pratos que com frquência<br />para depois adicionar a uma refeição rapidamente</p>
                    </div>
                    <div>
                        <h3>Registo de Refeições</h3>
                        <p>Registe todas as suas refeições diáriamente para melhorar a sua expêrincia de tracking</p>
                    </div>
                </div>
                <div class="flex-item image fit round">
                    <img src="images/Flogo.png" alt="" />
                </div>
                <div class="flex-item right">
                    <div>
                        <h3>Visualizar Estatísticas</h3>
                        <p>Após de registar algumas reifeições<br /> poderá visualizar estátisticas da sua alimentação</p>
                    </div>
                    <div>
                        <h3>Suscipit nibh dolore</h3>
                        <p>Pellentesque egestas sem. Suspendisse<br /> modo ullamcorper feugiat lorem.</p>
                    </div>
                </div>
            </div>
        </section>

    <!-- Two -->
        <section id="two" class="wrapper style1 special">
            <div class="inner">
                <h2>Comer com Moderação</h2>
                <figure>
                    <blockquote>
                        "Moderation. Small helpings. Sample a little bit of everything.<br /> These are the secrets of happiness and good health."
                    </blockquote>
                    <footer>
                        <cite class="author">Julia Child</cite>
                        <cite class="company">Cozinheiro Professional</cite>
                    </footer>
                </figure>
            </div>
        </section>

    <!-- Three -->
        <section id="three" class="wrapper">
            <div class="inner flex flex-3">
                <a href="">
                    <div class="flex-item box">
                        <div class="image fit">
                            <img src="images/pic02.jpg" alt="" />
                        </div>
                        <div class="content">
                            <h3>Pratos</h3>
                            <p>Adicione, edite e elimina os seus pratos favoritos</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="flex-item box">
                        <div class="image fit">
                            <img src="images/pic03.jpg" alt="" />
                        </div>
                        <div class="content">
                            <h3>Refeições</h3>
                            <p>Registe as suas refeições ao longo do dia</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="flex-item box">
                        <div class="image fit">
                            <img src="images/pic04.jpg" alt="" />
                        </div>
                        <div class="content">
                            <h3>Estatísticas</h3>
                            <p>Veja a estatísticas dos seus hábitos alimentares e veja como melhorar</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        @endsection