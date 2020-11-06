<!DOCTYPE HTML>
<!--
 Intensify by TEMPLATED
 templated.co @templatedco
 Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Food Tracker</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="icon" href="/images/Flogo.png">
</head>

<body class="antialiased">

    <!-- Header -->
    <header id="header">
        <a href="/home" class="logo">Food Tracker</a>
        @if (Auth::check())
        <nav class="right">
                Bem vindo(a), <a href="/perfil" class="nome_perfil fit alt">{{ Auth::user()->name }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <button type="submit" class="button small">LOG OUT</button>
            </form>
        </nav>
    @endif
    </header>
    <div class="inner">

    </div>
    <section id="three" class="wrapper">
        <h1 class="titulo">OH NO! </h1>
        <div class="inner">
            <h3 style="color: #727a82;" class="sem-pratos-refeicoes">
                @yield('code')
                <br>
                @yield('message')
            </h3>
        </div>
        <div class="inner">
        </div>
    </section>
    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <h2>Entre em Contacto</h2>
            <ul class="actions">
                <li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
                <li><span class="icon fa-envelope"></span> <a href="#">foodtracker@ua.pt</a></li>
            </ul>
        </div>
        <div class="copyright">
            &copy; Food Tracker. Design <a href="https://templated.co">TEMPLATED</a>. Images <a
                href="https://unsplash.com">Unsplash</a>.
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery.scrolly.min.js"></script>
    <script src="/assets/js/skel.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
