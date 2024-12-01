<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redireciona para a página de login
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/endgam/games.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:25 GMT -->
<head>
	<title>EndGam - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Um espaço dedicado ao público gamer de jogos 3D">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/logo1.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Segue nós:</p>
				<a href="https://br.pinterest.com/jgameplay123/"><i class="fa fa-pinterest"></i></a>
				<a href="https://www.facebook.com/profile.php?id=61567880185949"><i class="fa fa-facebook"></i></a>
				<a href="https://x.com/Hayakawa1BR"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/3dga.merzone/"><i class="fa fa-instagram" style="color: #ffffff;"></i>
				<a href="https://github.com/joaopvp123kk"><i class="fa fa-github"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="index-2.php" class="site-logo">
					<img src="img/logo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<a href="logout.php">Logout</a> 
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="index-2.php">Início</a></li>
						<li><a href="games.php">Jogos</a>
							<!--<ul class="sub-menu">
								<li><a href="game-single.html">Game Singel</a></li>
						</ul>-->
						</li>
						<li><a href="review.php">avaliações</a></li>
						<li><a href="blog.php">Notícias</a></li>
						<!-- <li><a href="contact.html">Contate-nos</a></li>contate a gente -->
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="page-info">
			<h2>Games</h2>
			<div class="site-breadcrumb">
				<a href="index-2.php">Home</a>  /
				<span>Games</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->




	<!-- Games section -->
	<section class="games-section">
		<div class="container">
			<ul class="game-filter">
				<!--<li><a href="#">A</a></li>
				<li><a href="#">B</a></li>
				<li><a href="#">C</a></li>
				<li><a href="#">D</a></li>
				<li><a href="#">E</a></li>
				<li><a href="#">F</a></li>
				<li><a href="#">G</a></li>
				<li><a href="#">H</a></li>
				<li><a href="#">I</a></li>
				<li><a href="#">J</a></li>
				<li><a href="#">K</a></li>
				<li><a href="#">L</a></li>
				<li><a href="#">M</a></li>
				<li><a href="#">N</a></li>
				<li><a href="#">O</a></li>
				<li><a href="#">P</a></li>
				<li><a href="#">Q</a></li>
				<li><a href="#">R</a></li>
				<li><a href="#">S</a></li>
				<li><a href="#">T</a></li>
				<li><a href="#">U</a></li>
				<li><a href="#">V</a></li>
				<li><a href="#">W</a></li>
				<li><a href="#">X</a></li>
				<li><a href="#">Y</a></li>
				<li><a href="#">Z</a></li>-->
			</ul>
			<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="game-item">
            <a href="https://www.playstation.com/en-us/games/the-last-of-us-part-ii/">
                <img src="img/games/game1.png" alt="The Last of Us Part II">
            </a>
            <h5>The Last of Us Part II</h5>
            <p>Uma experiência de ação e emoção imersiva em um mundo pós-apocalíptico. A jornada de Ellie continua com uma narrativa profunda e jogabilidade emocionante.</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="game-item">
            <a href="https://www.cyberpunk.net/en/us/buy">
                <img src="img/games/game2.png" alt="Cyberpunk 2077">
            </a>
            <h5>Cyberpunk 2077</h5>
            <p>Entre em Night City e experimente um mundo aberto repleto de ação, intriga e escolhas significativas, com gráficos de última geração.</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="game-item">
            <a href="https://www.playstation.com/en-us/games/horizon-forbidden-west/">
                <img src="img/games/game3.png" alt="Horizon Forbidden West">
            </a>
            <h5>Horizon Forbidden West</h5>
            <p>Explore novas fronteiras em um mundo pós-apocalíptico repleto de máquinas e mistérios, enquanto você continua a jornada de Aloy.</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="game-item">
            <a href="https://www.playstation.com/en-us/games/marvels-spider-man-miles-morales/">
                <img src="img/games/game4.png" alt="Spider-Man: Miles Morales">
            </a>
            <h5>Spider-Man: Miles Morales</h5>
            <p>Assuma o manto do novo Spider-Man e defenda Nova York de ameaças em um mundo aberto vibrante, com gráficos impressionantes e ação cheia de adrenalina.</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="game-item">
            <a href="https://www.residentevil.com/village/us/">
                <img src="img/games/game5.png" alt="Resident Evil Village">
            </a>
            <h5>Resident Evil Village</h5>
            <p>Enfrente horrores em um cenário gótico com Ethan Winters em uma busca para resgatar sua filha. Um dos jogos mais aterrorizantes da franquia.</p>
        </div>
    </div>
</div>


			<!--	
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sidebar">
    <div id="stickySidebar">
        <div class="widget-item">
            <div class="categories-widget">
                <h4 class="widget-title">Categorias</h4>
                <ul>
                    <li><a href="#">Jogos</a></li>
                    <li><a href="#">Dicas & Truques de Jogo</a></li>
                    <li><a href="#">Jogos Online</a></li>
                    <li><a href="#">Jogos em Equipe</a></li>
                    <li><a href="#">Comunidade</a></li>
                    <li><a href="#">Sem Categoria</a></li>
                </ul>
            </div>
        </div>
        <div class="widget-item">
            <div class="categories-widget">
                <h4 class="widget-title">Plataformas</h4>
                <ul>
                    <li><a href="#">Xbox</a></li>
                    <li><a href="#">Xbox 360</a></li>
                    <li><a href="#">PlayStation</a></li>
                    <li><a href="#">PlayStation VR</a></li>
                    <li><a href="#">Nintendo Wii</a></li>
                    <li><a href="#">Nintendo Wii U</a></li>
                </ul>
            </div>
        </div>
        <div class="widget-item">
            <div class="categories-widget">
                <h4 class="widget-title">Gêneros</h4>
                <ul>
                    <li><a href="#">Online</a></li>
                    <li><a href="#">Aventura</a></li>
                    <li><a href="#">Ficção Científica</a></li>
                    <li><a href="#">Estratégia</a></li>
                    <li><a href="#">Corrida</a></li>
                    <li><a href="#">Tiro</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
-->
	</section>
	<!-- Games end-->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/gow.png"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">11.11.18  /  in <a href="#">Games</a></div>
				<h3>O jogo que você estava esperando já está disponível</h3>
				<p>God of War Ragnarök é uma obra-prima que usa o poder do 3D para mergulhar os jogadores na rica mitologia nórdica, reimaginando personagens e eventos como Thor, Odin e o próprio apocalipse Ragnarök. Mais do que um jogo de ação, ele é uma janela para as tradições e lendas nórdicas, explorando temas de destino, sacrifício e família. Com cenários detalhados como Midgard, Asgard e Svartalfheim, o jogo combina elementos culturais e filosóficos, criando uma experiência imersiva e emocionante. A relação entre Kratos e Atreus ancora a narrativa, trazendo humanidade para um mundo épico e repleto de simbolismos históricos.</p>
				<!--<a href="#" class="read-more">Leia Mais <img src="img/icons/double-arrow.png" alt="#"/></a> -->
			</div>
		</div>
	</section>
	<!-- Featured section end-->


	<!-- Newsletter section
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	 Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="kratos h2-pic">
				<img src="img/kratos h2-pic.png" alt="">
			</div>
			<div class="kratos-pic">
				<img src="img/kratos-pic.png" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="img/logo.png" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="index-2.php">Início</a></li>
				<li><a href="games.php">Jogos</a></li>
				<li><a href="review.php">avaliações</a></li>
				<li><a href="blog.php">Notícias</a></li>
				<!--<li><a href="#">Contate-nos</a></li>-->
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="https://br.pinterest.com/jgameplay123/"><i class="fa fa-pinterest"></i></a>
				<a href="https://www.facebook.com/profile.php?id=61567880185949"><i class="fa fa-facebook"></i></a>
				<a href="https://x.com/Hayakawa1BR"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/3dga.merzone/"><i class="fa fa-instagram" style="color: #ffffff;"></i>
				<a href="https://github.com/joaopvp123kk"><i class="fa fa-github"></i></a>
			</div>
			<div class="copyright"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="../../../colorlib.com/index.html" target="_blank">Joao</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8d8565811fcecad4","version":"2024.10.4","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/endgam/games.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:27 GMT -->
</html>
