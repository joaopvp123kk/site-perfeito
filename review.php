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

<!-- Mirrored from preview.colorlib.com/theme/endgam/review.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:27 GMT -->
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
								<li><a href="game-single.php">Game Single-Player</a></li>
							</ul>-->
						</li>
						<li><a href="review.php">avaliações</a></li> <!-- avaliações de jogos --> 
						<li><a href="blog.php">Notícias</a></li> <!-- noticias de jogos em 3d -->
						<!-- <-- <li><a href="contact.html">Contate-nos</a></li>contate a gente [ontate a gente -->
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/2.jpg">
		<div class="page-info">
			<h2>Reviews</h2>
			<div class="site-breadcrumb">
				<a href="index-2.php">Home</a>  /
				<span>Reviews</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Review section -->
	<section class="games-section">
		<div class="container">
			<!-- <ul class="game-filter">
				<li><a href="#">A</a></li>
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
				<li><a href="#">Z</a></li> -->
			</ul>
			<div class="blog-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="img/review/1.png" alt="">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								
							</div>
							
							<h3>Assassin’s Creed II (2009)</h3>
							<p>Este jogo transporta os jogadores para o Renascimento italiano, uma das eras mais influentes da história ocidental. Ele recria com precisão cidades como Florença, Veneza e Roma, onde você pode explorar obras...</p>
							<a href="assasin.php" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="tcc\site\assasin.php"/></a>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="img/review/2.png" alt="">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
							</div>
							
							<h3>Battlefield 1 (2016)</h3>
							<p>Focado na Primeira Guerra Mundial, Battlefield 1 oferece uma recriação fiel de cenários de batalha históricos, desde trincheiras na Europa até os desertos do Oriente Médio...</p>
							<a href="battlefield.php" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="img/review/3.png" alt="">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								
							</div>
							
							<h3>Red Dead Redemption 2 (2018)</h3>
							<p>Ambientado no final do século XIX, Red Dead Redemption 2 mostra o declínio do Velho Oeste e a transição para a era moderna nos Estados Unidos. O jogo apresenta temas como industrialização...</p>
							<a href="rdr.php" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="img/review/4.png" alt="">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								
							</div>
							
							<h3> Valiant Hearts: The Great War (2014)</h3>
							<p>Este jogo combina um estilo visual artístico com uma recriação emocional da Primeira Guerra Mundial. Baseado em cartas reais de soldados, Valiant Hearts mostra o lado humano do conflito...</p>
							<a href="valiant.php" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="img/review/5.png" alt="">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								
							</div>
							
							<h3>Medal of Honor: Allied Assault (2002)</h3>
							<p>Este clássico dos jogos de tiro se destaca por sua recriação intensa da Segunda Guerra Mundial, com missões baseadas em operações reais, como o famoso desembarque na Normandia durante o Dia D...</p>
							<a href="medal.php" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="site-pagination">
				<a href="#" class="active">01.</a>
				<a href="#">02.</a>
				<a href="#">03.</a>
			</div> -->
		</div>
	</section>
	<!-- Review section end-->

	
	<!-- Newsletter section 
	<section class="newsletter-section">
		<div class="container">
			<h2>Assine o nosso newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">Assine  <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->


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

	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8d856584197e6451","version":"2024.10.4","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/endgam/review.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:29 GMT -->
</html>
