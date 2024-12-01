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

<!-- Mirrored from preview..com/theme/endgam/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:29 GMT -->
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="page-info">
			<h2>Blog</h2>
			<div class="site-breadcrumb">
				<a href="index-2.php">Home</a>  /
				<span>Blog</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Blog page -->
	<section class="blog-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<!--<<ul class="blog-filter">
						<li><a href="#">Racing</a></li>
						<li><a href="#">Shooters</a></li>
						<li><a href="#">Strategy</a></li>
						<li><a href="#">Online</a></li>
					</ul>-->
					<div class="big-blog-item">
						<img src="img/blog-big/1.jpg" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">25.10.24  /  in <a href="#">Blogs</a></div>
							<h3>Os melhores jogos VR do mercado</h3>
							<p>Com a evolução constante da tecnologia de realidade virtual (VR), os jogos 3D estão proporcionando experiências imersivas como nunca antes. Aqui estão alguns dos melhores títulos disponíveis no mercado que prometem horas de diversão e envolvimento...</p>
							<a href="leiamaisvr.php" class="read-more">Leia Mais <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<div class="big-blog-item">
						<img src="img\img-blog1\starwars.png" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">25.10.24  /  in <a href="#">Blogs</a></div>
							<h4>Star Wars Outlaws: Mundo aberto no universo Star Wars</h4><p></p>
						
							<p>Este será o primeiro jogo da franquia Star Wars a explorar um vasto mundo aberto. Os jogadores assumirão o papel de uma contrabandista em uma narrativa que combina aventura e exploração. Apesar da empolgação, a data de lançamento ainda não foi definida, mas está confirmada para PS5, Xbox Series X/S e PC​
							...</p>
							<a href="2leiamais.php" class="read-more">Leia Mais <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<div class="big-blog-item">
						<img src="img\img-blog1\tekken.png" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">25.10.24  /  in <a href="#">Blogs</a></div>
							<h3>Tekken 8 com gráficos ultrarrealistas</h3>
							<p>O  aguardado jogo de luta Tekken 8 será o primeiro da franquia desenvolvido com o motor gráfico Unreal Engine 5. Isso promete elevar o realismo visual e introduzir mecânicas inéditas. O lançamento está marcado para 26 de janeiro de 2024 para PS5, Xbox Series X/S e PC...</p>
							<a href="1leiamais.php" class="read-more">Leia Mais <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!--<div class="owl-dots">
						<a href="#" class="active">01.</a>
						<a href="#">02.</a>
						<a href="#">03.</a>
					</div>-->
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<!--<form class="search-widget">
								<input type="text">
								<button>search</button>
							</form>-->
						</div>
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/1.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  in <a href="#">Games</a></div>
										<h5>Realidade Virtual e Aumentada:</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/2.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  in <a href="#">Games</a></div>
										<h5>Jogos como Serviço (GaaS):</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/3.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  in <a href="#">Games</a></div>
										<h5>Integração de IA:</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/blog-widget/4.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">25.10.24  /  in <a href="#">Games</a></div>
										<h5>Experiências Multijogador:</h5>
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
						<div class="widget-item">
    <h4 class="widget-title">Últimos Comentários</h4>
    <div class="latest-comments" id="comments-list">
        <!-- Comentários serão adicionados aqui -->
    </div>
</div>

<style>
        /* Estilo para o formulário de comentário */
        .comment-form {
            background-color: #f4f4f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        .comment-form h4 {
            text-align: center;
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .comment-form input, .comment-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
        }

        .comment-form input:focus, .comment-form textarea:focus {
            border-color: #007BFF;
            outline: none;
        }

        .comment-form button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .comment-form button:hover {
            background-color: #0056b3;
        }

        /* Estilo para o comentário exibido */
        .lc-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .lc-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .tw-text {
            max-width: 500px;
        }

        .tw-text a {
            font-weight: bold;
            color: #007BFF;
            text-decoration: none;
        }

        .tw-text a:hover {
            text-decoration: underline;
        }

        .tw-text span {
            color: #666;
            font-size: 0.9rem;
            margin-left: 5px;
        }
    </style>
</head>
<body>

<!-- Formulário para enviar comentário -->
<style>
        /* Estilo para o formulário de comentário */
        .comment-form {
            background-color: #f4f4f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        .comment-form h4 {
            text-align: center;
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .comment-form input, .comment-form textarea, .comment-form input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
        }

        .comment-form input:focus, .comment-form textarea:focus, .comment-form input[type="file"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        .comment-form button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .comment-form button:hover {
            background-color: #0056b3;
        }

        /* Estilo para o comentário exibido */
        .lc-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .lc-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .tw-text {
            max-width: 500px;
        }

        .tw-text a {
            font-weight: bold;
            color: #007BFF;
            text-decoration: none;
        }

        .tw-text a:hover {
            text-decoration: underline;
        }

        .tw-text span {
            color: #666;
            font-size: 0.9rem;
            margin-left: 5px;
        }
    </style>
</head>
<body>

<!-- Formulário para enviar comentário -->
<style>
        /* Estilo para o formulário de comentário com caixa roxa */
        .comment-form {
            background-color: #f9f3ff;  /* Cor de fundo roxa clara */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
            border: 2px solid #6a1b9a;  /* Borda roxa */
        }

        .comment-form h4 {
            text-align: center;
            font-size: 1.5rem;
            color: #6a1b9a;  /* Cor do título roxa */
            margin-bottom: 20px;
        }

        .comment-form input, .comment-form textarea, .comment-form input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
        }

        .comment-form input:focus, .comment-form textarea:focus, .comment-form input[type="file"]:focus {
            border-color: #6a1b9a;  /* Borda roxa no foco */
            outline: none;
        }

        .comment-form button {
            background-color: #6a1b9a;  /* Cor do botão roxa */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .comment-form button:hover {
            background-color: #4a148c;  /* Cor do botão roxa mais escura ao passar o mouse */
        }

        /* Estilo para o comentário exibido */
        .lc-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .lc-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .tw-text {
            max-width: 500px;
        }

        .tw-text a {
            font-weight: bold;
            color: #6a1b9a;  /* Cor roxa para o nome */
            text-decoration: none;
        }

        .tw-text a:hover {
            text-decoration: underline;
        }

        .tw-text span {
            color: #666;
            font-size: 0.9rem;
            margin-left: 5px;
        }
    </style>
</head>
<body>

<!-- Formulário para enviar comentário -->
<div class="comment-form">
    <h4>Deixe seu comentário</h4>
    <input type="text" id="user-name" placeholder="Seu nome" required><br><br>
    <input type="file" id="user-avatar" accept="image/*"><br><br>
    <textarea id="user-comment" placeholder="Escreva seu comentário..." required></textarea><br><br>
    <button onclick="addComment()">Enviar Comentário</button>
</div>

<!-- Lista de Comentários -->
<div id="comments-list"></div>

<script>
    function addComment() {
        var name = document.getElementById('user-name').value;
        var comment = document.getElementById('user-comment').value;
        var avatarFile = document.getElementById('user-avatar').files[0];

        if (name && comment) {
            var commentsList = document.getElementById('comments-list');

            var commentItem = document.createElement('div');
            commentItem.classList.add('lc-item');

            var avatar = document.createElement('img');
            if (avatarFile) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    avatar.src = e.target.result;
                };
                reader.readAsDataURL(avatarFile);
            } else {
                avatar.src = "img/blog-widget/default-avatar.jpg"; // Imagem padrão
            }
            avatar.classList.add('lc-avatar');

            var textDiv = document.createElement('div');
            textDiv.classList.add('tw-text');

            var commentText = document.createElement('div');
            commentText.innerHTML = '<a href="#">' + name + '</a> <span>On</span> ' + comment;

            textDiv.appendChild(commentText);
            commentItem.appendChild(avatar);
            commentItem.appendChild(textDiv);

            commentsList.appendChild(commentItem);

            // Limpar os campos do formulário
            document.getElementById('user-name').value = '';
            document.getElementById('user-comment').value = '';
            document.getElementById('user-avatar').value = ''; // Limpar a foto
        } else {
            alert("Por favor, preencha o nome e o comentário.");
        }
    }
</script>


						<div class="widget-item">
							<a href="#" class="add">
								<img src="img/add.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page end-->


	<!-- Newsletter section --
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe <img src="img/icons/double-arrow.png" alt="#"/></button>
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

	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8d8565856c33cad4","version":"2024.10.4","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/endgam/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 21:46:29 GMT -->
</html>
