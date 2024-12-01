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

<!-- Mirrored from preview.colorlib.com/theme/endgam/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:45:43 GMT -->
<head>
	<title>3D Gamer Zone - Um espaço dedicado ao público gamer de jogos 3D</title>
	<meta charset="UTF-8">
	<meta name="description" content="Um espaço dedicado ao público gamer de jogos 3D">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/logo1.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="../../../fonts.googleapis.com/css.141c1.delayed?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


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
						<li><a href="#">Início</a></li>
						<li><a href="games.php">Jogos</a>
							<!--<ul class="sub-menu">
								<li><a href="game-single.php">Game Single-Player</a></li>
							</ul>-->
						</li>
						<li><a href="review.php">avaliações</a></li> <!-- avaliações de jogos --> 
						<li><a href="blog.php">Notícias</a></li> <!-- noticias de jogos em 3d -->
						<!-- <li><a href="contact.html">Contate-nos</a></li>[ontate a gente -->
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<!-- Hero Section -->
<section class="hero-section overflow-hidden">
    <div class="hero-slider owl-carousel">
        <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-1.jpg">
            <div class="container">
                <h2>Game on!</h2>
                <p>Seja bem Vindo ao site, humilde!</p>
                <!--<a href="#" class="site-btn animated-btn">Leia Mais  
                    <img src="img/icons/double-arrow.png" alt="#" class="arrow-icon"/>
                </a>-->
            </div>
        </div>
        <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-2.jpg">
            <div class="container">
                <h2>Reviews</h2>
                <p>Olhem as Reviews!</p>
                <a href="review.php" class="site-btn animated-btn">Leia Mais  
                    <img src="img/icons/double-arrow.png" alt="reviews.php" class="arrow-icon"/>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Efeito de hover e animação no botão */
    .animated-btn {
       
        transition: color 0.3s ease, transform 0.3s ease;
        position: relative;
    }

    /* Alteração de cor ao passar o mouse */
    .animated-btn:hover {
        color: purple;
    }

    /* Animação da seta ao passar o mouse */
    .animated-btn .arrow-icon {
        transition: transform 0.3s ease;
        position: relative;
        left: 0;
    }

    .animated-btn:hover .arrow-icon {
        transform: translateX(5px); /* Move a seta 5px para a direita */
    }

    /* Animação de clique */
    .animated-btn:active {
        transform: scale(0.95); /* Pequeno efeito de clique no botão */
    }
</style>

	<!-- Hero section end-->


	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">25.10.24  /  em <a href="games.php">Jogos</a></div>
						<h3>O melhor jogo lançou!</h3>
						<p>The Last of Us Part II é um jogo de ação e aventura lançado em 2020, sequela de The Last of Us. A trama segue Ellie em sua jornada de vingança em um mundo pós-apocalíptico, explorando temas como dor, perdão e as consequências das escolhas pessoais. O jogo foi aclamado por sua narrativa profunda, jogabilidade refinada e gráficos impressionantes, embora tenha gerado controvérsias por suas decisões ousadas e impactantes na história. Considerado um dos melhores jogos da geração, recebeu diversos prêmios, incluindo o de Jogo do Ano.</p>
						<!-- <a href="#" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>-->
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">25.10.24  /  in <a href="#">Playstation</a></div>
						<h3>Top 5 Jogos em Dezembro (lançamento)</h3>
						<p>Marvel Rivals (Dec 6)</p>
						<p>Indiana Jones and the Great Circle (Dec 9)</p> 
						<p>Alien: Rogue Incursion (Dec 19)</p>
						<p>Path of Exile 2 (Dec 6)</p>
						<p>Fantasian Neo Dimension (Dec 5)</p> 
					<!-- 	<a href="#" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>-->
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">25.10.24  /  in <a href="#">Educacional</a></div>
						<h3>Jogos em 3D</h3>
						<p>Jogos 3D transformaram a indústria dos videogames ao permitir mundos interativos e imersivos, como visto em Super Mario 64 e The Legend of Zelda: Breath of the Wild. Com o uso de gráficos tridimensionais, os jogos oferecem uma sensação de profundidade, interação mais realista e liberdade de movimento, com destaque para títulos como Minecraft e Red Dead Redemption 2. A tecnologia também é usada para criar efeitos visuais avançados e experiências de realidade virtual, como em Half-Life: Alyx, impulsionando ainda mais a evolução dos jogos 3D</p>
					<!-- 	<a href="#" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Ultimas Nóticias</h2>
					</div>
					<!--<ul class="blog-filter">
						<li><a href="#">Corrida</a></li>
						<li><a href="#">Shooters</a></li>
						<li><a href="#">Estratégia</a></li>
						<li><a href="#">Online</a></li> 
					</ul>-->
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="img/blog/vr.png" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">25.10.24  /  em <a href="games.php">Jogos</a></div>
							<h3>Os melhores jogos VR do mercado</h3>
							<p>Com a evolução constante da tecnologia de realidade virtual (VR), os jogos 3D estão proporcionando experiências imersivas como nunca antes. Aqui estão alguns dos melhores títulos disponíveis no mercado que prometem horas de diversão e envolvimento...
							</p>
							<a href="leiamaisvr.php" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="img/blog/swars.png" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">25.10.24  /  em <a href="games.php">Jogos</a></div>
							<h3>Star Wars Outlaws: Mundo aberto no universo Star Wars</h3>
							<p>Este será o primeiro jogo da franquia Star Wars a explorar um vasto mundo aberto. Os jogadores assumirão o papel de uma contrabandista em uma narrativa que combina aventura e exploração. Apesar da empolgação, a data de lançamento ainda não foi definida, mas está confirmada para PS5, Xbox Series X/S e PC​...
							</p>
							<a href="2leiamais.php" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="img/blog/tekken8.png" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">25.10.24  /  em <a href="games.php">Jogos</a></div>
							<h3>Tekken 8 com gráficos ultrarrealistas</h3>
							<p>O aguardado jogo de luta Tekken 8 será o primeiro da franquia desenvolvido com o motor gráfico Unreal Engine 5. Isso promete elevar o realismo visual e introduzir mecânicas inéditas. O lançamento está marcado para 26 de janeiro de 2024 para PS5, Xbox Series X/S e PC...
							</p>
							<a href="1leiamais.php" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
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
										<div class="tw-meta">25.10.24  /  em <a href="games.php">Jogos</a></div>
										<h5>O melhor jogo online lançou!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/2.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  em <a href="games.php">Jogos</a></div>
										<h5>O melhor jogo online lançou!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/3.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  em <a href="games.php">Jogos</a></div>
										<h5>O melhor jogo online lançou!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/4.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  em <a href="games.php">Jogos</a></div>
										<h5>O melhor jogo online lançou!</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="games.php">Jogos</a></li>
									<li><a href="https://br.pinterest.com/jgameplay123/">Pinterest</a></li>
									<li><a href="https://www.facebook.com/profile.php?id=61567880185949">Facebook</a></li>
									<li><a href="https://x.com/Hayakawa1BR">Twitter</a></li>
									<li><a href="https://www.instagram.com/3dga.merzone/">Instagram</a></li>
									<li><a href="https://github.com/joaopvp123kk">GitHub</a></li>
								</ul>
							</div>
						</div>
						<!--<div class="widget-item">
						<a href="#" class="add">
							<img src="img/add.jpg" alt="">
						</a>
					</div>-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="img/promo-bg.jpg">
		<a href="../../../www.youtube.com/watch?v=D2Z9oKTzzrM&ab_channel=Minecraft" class="video-play-btn video-popup"><img src="img/icons/solid-right-arrow.png" alt="https://www.youtube.com/watch?v=D2Z9oKTzzrM&ab_channel=Minecraft"></a>
		<div class="container">
			<div class="video-text">
				<h2>Promo video de um jogo</h2>
				<p>Contemplem o melhor jogo da vida.</p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/featured-bg.jpg"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">29.02.24  /  em <a href="games.php">Jogos</a></div>
				<h3>O jogo que você estava esperando já foi lançado!</h3>
				<p>Para os fãs de RPGs clássicos e para uma nova geração de jogadores, Final Fantasy VII Rebirth é, sem dúvida, um dos lançamentos mais emocionantes de 2024. A tão esperada continuação do remake de Final Fantasy VII trouxe de volta personagens amados, paisagens icônicas e uma trama que conquistou corações desde seu lançamento original em 1997. Mas desta vez, com um toque moderno e inovações que renovam a experiência....</p>
				<!--<a href="#" class="read-more">Leia Mais  <img src="img/icons/double-arrow.png" alt="#"/></a>-->
			</div>
		</div>
	</section>
	<!-- Featured section end-->



	<!-- Newsletter section --
	<section class="newsletter-section">
		<div class="container">
			<h2>Assine o nosso newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="Entre com seu email">
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
				<padding: 60px 15px 25px;
				<img src="img/kratos.png" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="img/logo.png" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="#">Início</a></li>
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
<script async src="../../../www.googletagmanager.com/gtag/js.28a055.delayed?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

	<script defer src="../../../static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015.29.delayed" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8d85652daebb6451","version":"2024.10.4","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/endgam/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:17 GMT -->
</html>
