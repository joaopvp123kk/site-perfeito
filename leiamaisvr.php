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
        <h2>Os melhores jogos VR do mercado</h2>
        <div class="site-breadcrumb">
            <a href="index-2.php" class="breadcrumb-link">Início</a>  /  
            <a href="blog.php" class="breadcrumb-link">Blog</a>  /  
            <span>Os melhores jogos VR do mercado</span>
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
                <!--<h4 class="gs-title">Os Melhores Jogos VR do Mercado em 2024</h4>-->
				<div class="oie">
				<p><h1>Com a evolução constante da tecnologia de realidade virtual (VR), os jogos 3D estão proporcionando experiências imersivas como nunca antes. Aqui estão alguns dos melhores títulos disponíveis no mercado que prometem horas de diversão e envolvimento.</h1></p>
				</div>
				<style>
					.oie {
						color: purple;
					}
				</style>
                <h4>Half-Life: Alyx</h4>
                <img src="img/img-blog1/half-life.jpg" alt="Imagem de Half-Life: Alyx">
                <p>Este título se passa entre os eventos dos jogos Half-Life e oferece uma narrativa envolvente e jogabilidade inovadora, definindo um novo padrão para os jogos VR.		
<!-- Link do Jogo com Ícone do steam -->
<p><strong>Link do Jogo:</strong> 
    <a href="https://store.steampowered.com/app/546560/HalfLife_Alyx/">
        <img src="img/plataformas/steam-logo.png" alt="Ícone do steam" style="width: 20px; height: 20px; vertical-align: middle;">
        steam
    </a>
</p>
				<h4>Beat Saber</h4>
				<img src="img\img-blog1\Beat-Saber.jpeg" alt="Imagem de Beat Saber">
				<p>Um jogo de ritmo onde os jogadores cortam blocos com sabres de luz ao som de músicas eletrônicas. É altamente viciante e considerado essencial para qualquer usuário de VR.</p>
				
<!-- Link do Jogo com Ícone do steam -->
<p><strong>Link do Jogo:</strong> 
    <a href="https://store.steampowered.com/app/620980/Beat_Saber/">
        <img src="img/plataformas/steam-logo.png" alt="Ícone do steam" style="width: 20px; height: 20px; vertical-align: middle;">
        steam
    </a>
</p>
				<h4>Resident Evil 7: Biohazard</h4>
<img src="img/img-blog1/resident-evil-7.jpg" alt="Imagem de Resident Evil 7: Biohazard">
<p>Leva a famosa franquia de terror para a realidade virtual, oferecendo uma experiência aterrorizante e imersiva que coloca o jogador diretamente no centro da ação.</p>

<!-- Link do Jogo com Ícone do steam -->
<p><strong>Link do Jogo:</strong> 
    <a href="https://store.steampowered.com/app/418370/Resident_Evil_7_Biohazard/">
        <img src="img/plataformas/steam-logo.png" alt="Ícone do steam" style="width: 20px; height: 20px; vertical-align: middle;">
        steam
    </a>
</p>

				
				<h4>Asgard’s Wrath 2</h4>
				<img src="img\img-blog1\asgard.jpg" alt="Imagem de Asgard’s Wrath 2">
				<p>Um RPG de ação exclusivo para Meta Quest, que permite aos jogadores explorar reinos habitados por deuses e se envolver em uma narrativa rica e emocionante.</p>
				
<!-- Link do Jogo com Ícone do steam -->
<p><strong>Link do Jogo:</strong> 
    <a href="https://www.meta.com/pt-br/experiences/asgards-wrath-2/2603836099654226/">
        <img src="img/plataformas/meta-logo.png" alt="Ícone do Meta" style="width: 20px; height: 20px; vertical-align: middle;">
        Meta
    </a>
</p>>
				
				<h4>Arizona Sunshine 2</h4>
				<img src="img\img-blog1\arizona.jpg" alt="Imagem de Arizona Sunshine 2">
				<p>Um jogo de sobrevivência em um mundo pós-apocalíptico dominado por zumbis, oferecendo tanto jogabilidade cooperativa quanto uma narrativa cativante.</p>
				
<!-- Link do Jogo com Ícone do steam -->
<p><strong>Link do Jogo:</strong> 
    <a href="https://store.steampowered.com/app/342180/Arizona_Sunshine/">
        <img src="img/plataformas/steam-logo.png" alt="Ícone do steam" style="width: 20px; height: 20px; vertical-align: middle;">
        steam
    </a>
</p>
				
				<h4>Among Us VR</h4>
				<img src="img\img-blog1\amongus.jpg" alt="Imagem de Among Us VR">
				<p>Uma adaptação do popular jogo de dedução, que agora permite aos jogadores interagir em um ambiente 3D e utilizar chat de voz com proximidade.</p>
				
<!-- Link do Jogo com Ícone do steam -->
<p><strong>Link do Jogo:</strong> 
    <a href=https://store.steampowered.com/app/1849900/Among_Us_VR/">
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
			<p><h1>Esses jogos destacam-se não apenas pela jogabilidade envolvente, mas também pela capacidade de transportar os jogadores para mundos distintos, explorando uma variedade de gêneros e estilos. Se você está interessado em saber mais sobre esses e outros jogos VR, confira os links acima.</h1></p>
			</div>
			<style>
				.oie {
					color: purple;
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
