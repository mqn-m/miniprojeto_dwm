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
		@yield('style')
	</head>
	<body>

<head>
    <title>Food Tracker</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="icon" href="/images/Flogo.png">
</head>

<body>


    <!-- Header -->
    <header id="header">
        <nav class="left">
            <a href="#menu"><span>Menu</span></a>
        </nav>
        <a href="/" class="logo">Food Tracker</a>
        <nav class="right">
            <a class="nome_perfil" href="/perfil"> Bem vindo(a), {{ Auth::user()->name }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			<button type="submit" class="button small">LOG OUT</button>
            </form>

        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="/">Home</a></li>
            <li><a href="/pratos">Pratos</a></li>
            <li><a href="/refeicoes">Refeicões</a></li>
        </ul>
        <ul class="actions vertical">
            <li><a href="/login" class="button fit">Login</a></li> <!-- log out -->
        </ul>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <h2>Entre em Contacto</h2>
            <ul class="actions">
                <li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
                <li><span class="icon fa-envelope"></span> <a href="#">foodtracker@ua.pt</a></li>
                <li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
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
	@yield('scripts');
</body>

</html>
