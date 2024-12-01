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

<!-- Mirrored from preview.colorlib.com/theme/endgam/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:29 GMT -->
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
						<!-- <li><a href="contact.html">Contate-nos</a></li>contate a gente --[ontate a gente -->
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
    <div class="page-info">
        <p></p>
        <h2>Star Wars Outlaws: Mundo aberto no universo Star Wars</h2>
        <div class="site-breadcrumb">
            <a href="index-2.php" class="breadcrumb-link">Início</a>  /  
            <a href="blog.php" class="breadcrumb-link">Blog</a>  /  
            <span>Star Wars Outlaws: Mundo aberto no universo Star Wars</span>
        </div>
		<!-- <div class="site-breadcrumb">25.10.24 / in <a href="#">games</a></div> -->
    </div>
</section>
<!-- Page top end-->

<style>
    .breadcrumb-link:hover {
        color: purple;
    }
</style>



	<!-- Contact page 
	<section class="contact-page">
		<div class="container">
			<div class="map"><iframe src="../../../www.google.com/maps/embed.5277e8.delayed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					<form class="contact-form">
						<input type="text" placeholder="Seu nome">
						<input type="text" placeholder="Seu e-mail">
						<input type="text" placeholder="Descrição">
						<textarea placeholder="Message"></textarea>
						<button class="site-btn">Mande Mensagem<img src="img/icons/double-arrow.png" alt="#"/></button>
					</form>
				</div>
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<h3>Olá! Diga Olá</h3>
					<p>O importante é saber o que as pessoas pensam sobre o nosso trabalho para ver se está muito bom ou até ruim. Uma crítica construtiva é sempre bom.....</p>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/location.png" alt=""></div>
						<div class="ci-text">R. Apucarana, 31 - Engenheiro, Japeri - RJ, 26420-380k</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/phone.png" alt=""></div>
						<div class="ci-text">+55 21 98721-3632</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/mail.png" alt=""></div>
						<div class="ci-text"><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="563e3925223f383116353938223735227835393b">[email&#160;protegido]</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
  Contact page end-->


	<!-- Newsletter section -->
<section class="games-section">
    <div class="container">
        <div class="game-single-preview">
            <img src="img/games/" alt="">
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
                <!--<h4 class="gs-title">Star Wars Outlaws: Mundo aberto no universo Star Wars em 2024</h4>-->
				<!-- Título da notícia -->
<div class="oie">
    <h1>Star Wars: Aventuras de Contrabandista no Primeiro Mundo Aberto da Franquia</h1>
    <p>O próximo título da franquia Star Wars, ainda sem data de lançamento definida, promete ser revolucionário ao trazer pela primeira vez um mundo aberto para a série de jogos. Os jogadores assumirão o papel de uma contrabandista, permitindo uma experiência narrativa que foge dos papéis tradicionais de Jedi ou Sith. O jogo será ambientado em uma vasta galáxia, cheia de planetas exploráveis, missões dinâmicas e decisões que impactarão diretamente o curso da história.</p>
    
    <p>A aventura combina elementos de exploração, combate, furtividade e personalização, garantindo um gameplay diversificado e imersivo. A escolha do personagem como uma contrabandista destaca o foco na sobrevivência, nos dilemas éticos e na necessidade de se adaptar a diferentes facções do universo Star Wars. Além disso, o jogo é projetado para aproveitar ao máximo o poder dos consoles de nova geração, como o PS5 e o Xbox Series X/S, assim como PCs de alto desempenho, prometendo gráficos impressionantes e mundos vivos repletos de detalhes.</p>
    
   </div>

<style>
    .oie {
        color: white; /* Cor aplicada ao texto */
    }

    .oie h1 {
        font-size: 24px;
        font-weight: bold;
    }

    .oie p {
        font-size: 16px;
        line-height: 1.6;
    }
</style>

                <h4>Star Wars Outlaws</h4>
                <img src="img\img-blog1\starwars2.png" alt="Imagem de Half-Life: Alyx">
                <p>Prepare-se para o próximo capítulo da lendária franquia de jogos de luta, Star Wars Outlaws.		
<!-- Link do Jogo com Ícone do steam -->
<p><strong>Link do Jogo:</strong> 
    <a href="https://store.steampowered.com/app/2842040/Star_Wars_Outlaws/">
        <img src="img/plataformas/steam-logo.png" alt="Ícone do steam" style="width: 20px; height: 20px; vertical-align: middle;">
        steam
    </a>
</p>				
				<!--	<form class="newsletter-form">
				<input type="text" placeholder="ENTRE COM SEU E-MAIL">
				<button class="site-btn">Assine <img src="img/icons/double-arrow.png" alt="#"/></button>-->
			</form>
		</div>
		<div class="oie">
			<p><h1>Com a introdução de um mundo aberto e a possibilidade de explorar novas perspectivas no universo Star Wars, o jogo promete uma experiência inovadora e cativante. Ao colocar os jogadores no papel de uma contrabandista, ele explora um lado mais humano e moralmente ambíguo da galáxia, marcando um novo capítulo no legado da franquia de jogos Star Wars.</h1></p>
			</div>
			<style>
				.oie {
					color: #white;
				}
			</style>
		
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
			<a href="index-2.html" class="footer-logo">
				<img src="img/logo.png" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="index-2.php">Início</a></li>
				<li><a href="games.php">Jogos</a></li>
				<li><a href="review.php">avaliações</a></li>
				<li><a href="blog.php">Notícias</a></li>
				<!-- <li><a href="contact.html">Contate-nos</a></li>contate a gente -->
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="https://br.pinterest.com/jgameplay123/"><i class="fa fa-pinterest"></i></a>
				<a href="https://www.facebook.com/profile.php?id=61567880185949"><i class="fa fa-facebook"></i></a>
				<a href="https://x.com/Hayakawa1BR"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/3dga.merzone/"><i class="fa fa-instagram" style="color: #ffffff;"></i>
				<a href="https://github.com/joaopvp123kk"><i class="fa fa-github"></i></a>
			</div>
			<div class="copyright"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright <!--&copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script>--> All rights reserved | This template is made with <!-- <i class="fa fa-heart-o" aria-hidden="true"></i> --> by <!--<a href="../../../colorlib.com/index.html" target="_blank">--> João</a>
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

	<!-- Global site tag (gtag.js) - Google Analytics 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');-->
</script>

	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8d856586adadcad4","version":"2024.10.4","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/endgam/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:35 GMT -->
</html>
