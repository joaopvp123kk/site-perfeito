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

<!-- Mirrored from preview.colorlib.com/theme/endgam/game-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:27 GMT -->
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
								<li><a href="game-single.html">`Jogo mais avaliado atualmente</a></li>
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
			<h2>Jogos</h2>
			<div class="site-breadcrumb">
				<a href="index-2.html">Inícioㅤ/</a>  
				<span>Jogos</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- games section -->
	<section class="games-section">
		<div class="container">
			<div class="game-single-preview">
				<img src="img/games/" alt="">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<h2 class="gs-title">Final Appocalipse 2.1</h2>
					<h4>Gameplay</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus.</p>
					<h4>Conclusion</h4>
					<p>Nulla ut maximus mauris. Sed malesuada at sapien sed euismod. Vestibulum pharetra in sem id laoreet. Cras metus ex, placerat nec justo quis, luctus posuere ex. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliquet, dictum molestie eros. Nullam scelerisque convallis gravida. Morbi id lorem accumsan, scelerisque enim laoreet, sollicitudin neque. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliqueDonec vitae tellus sodales, congue augue at, biben-dum justo. Pellentesque non dolor et magna volutpat pharetra eget vel ligula. Maecenas facilisis vestibulum mattis. Sed sagittis gravida urna. Cras nec mi risus.
					</p>
					<div class="geme-social-share pt-5 d-flex">
						<p>Share:</p>
						<a href="https://br.pinterest.com/jgameplay123/"><i class="fa fa-pinterest"></i></a>
						<a href="https://www.facebook.com/profile.php?id=61567880185949"><i class="fa fa-facebook"></i></a>
						<a href="https://x.com/Hayakawa1BR"><i class="fa fa-twitter"></i></a>
						<a href="https://www.instagram.com/3dga.merzone/"><i class="fa fa-instagram" style="color: #ffffff;"></i>
						<a href="https://github.com/joaopvp123kk"><i class="fa fa-github"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/1.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  em <a href="#">TCC</a></div>
										<h5>É um baita de um TCC!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/2.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  em <a href="#">TCC</a></div>
										<h5>Melhor TCC do Mundo</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/3.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  em <a href="#">TCC</a></div>
										<h5>このぢおだ！</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/4.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  em <a href="#">TCC</a></div>
										<h5>The best TTCC is out now!</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="testimonials-widget">
								<h4 class="widget-title">Declaração Final</h4>
								<div class="testim-text">
									<p>Concluir este trabalho sobre o desenvolvimento e impacto de sites representa um marco importante em minha trajetória acadêmica e profissional. Durante este percurso, tive a oportunidade de mergulhar no vasto universo da tecnologia e compreender como ferramentas digitais podem transformar a forma como interagimos, consumimos e criamos.

										Sou imensamente grato(a) pela oportunidade de explorar esse tema e por todos os aprendizados que essa jornada proporcionou. Essa experiência não apenas ampliou minha visão sobre o potencial dos sites, mas também consolidou a certeza de que o investimento em conhecimento e inovação sempre traz frutos significativos.
										
										Por fim, reconheço que este trabalho só foi possível graças à colaboração e apoio de professores, colegas e familiares, aos quais estendo minha mais sincera gratidão. Essa "jogada" de investir tempo e dedicação neste projeto foi certeira, e espero que os insights aqui apresentados contribuam para o desenvolvimento contínuo da área e inspirem outros a explorar suas próprias ideias com paixão e determinação.</p>
									<h6><span>Oliveira, João Vítor</span>Gamer</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- games end-->

	<section class="oii">
		<div class="oie">
			<div class="game-author-info">
				<h4>Escrito por: João Oliveira e Marcos Paulo</h4>
				<p>Um site humilde para o TCC</p>
			</div>
		</div>
		<style>
			.oii {
				color: purple;
				background-color: #501755; /* Adiciona o fundo roxo */
				padding: 10px; /* Adiciona um espaçamento interno */
				; /* Bordas arredondadas (opcional) */
				color: white; /* Ajusta a cor do texto para maior contraste */
			}
		</style>
	</section>
	


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

	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8d85658268dacad4","version":"2024.10.4","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/endgam/game-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:27 GMT -->
</html>
