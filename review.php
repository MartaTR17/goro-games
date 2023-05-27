<!DOCTYPE html>
<html lang="es">
<head>
	<title>Goro Games - Juegos</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

    <!-- Header section -->
    <header class="header-section">
      <div class="container">
        <!-- logo -->
        <a class="site-logo" href="index.php">
          <img src="img/logo.png" alt="" />
        </a>
        <!-- responsive -->
        <div class="nav-switch">
          <i class="fa fa-bars"></i>
        </div>
        <!-- site menu -->
        <nav class="main-menu">
          
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="review.php">Juegos</a></li>
            <li><a href="categories.php">Blog</a></li>
            <li><a href="foro/index.php">Foro</a></li>
            <li><a href="contact.php">Contacto</a></li>
          </ul>
          <div class="user-panel">
        <?php 
        session_start();
        if (isset($_SESSION['usuario'])) { ?>
        <img src="./img/user.webp" alt="Foto de Usuario">
        <div>Bienvenido, <?php echo $_SESSION['usuario']; ?></div>
        <div class="user-panel">
        <a href="logout.php">Cerrar sesión</a>
        </div>
    </div>
<?php } else { ?>
    <a href="login.php">Iniciar Sesión / Registrarse</a>
<?php } ?>

        </div>
        </nav>
      </div>
    </header>
    <!-- Header section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Últimas noticias</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">nuevo</span>Construyen un vehículo de Star Wars en The Legend of Zelda: Tears of the Kingdom.</div>
				<div class="nt-item"><span class="strategy">estrategia</span>World of Warcraft Dragonflight: Todo lo que necesitas saber de la nueva expansión de WoW.</div>
				<div class="nt-item"><span class="racing">carreras</span>Rocket League da la bienvenida a nuevos aspectos para coches con temática de Star Wars.</div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h3>Reseñas de Videojuegos 
							<p><br>En esta página encontrarás los análisis de videojuegos. En Goro Games analizamos los últimos lanzamientos valorando aspectos como los gráficos, el sonido, la jugabilidad, el rendimiento, los diferentes modos de juego y otros aspectos en su conjunto y le aplicamos una nota de 1 a 10, que representa su calidad general, para que te ayude a decidir qué juegos merecen la pena.</p>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section review-page spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/5.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Hogwarts Legacy</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>Como juego de rol de acción inmersivo de mundo abierto se nos trasladará a finales del siglo XIX, invitándonos a explorar y descubrir bestias fantásticas, personalizar nuestro personaje y elaborar pociones, dominar el lanzamiento de hechizos y desentrañar qué misterios se ocultan en Hogwarts.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/6.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Grand Theft Auto</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>Nos sumergiremos en una aventura de mundo abierto con mucha acción en la que los tiroteos, la conducción de vehículos y las persecuciones policiales están a la orden del día mientras cometemos todo tipo de fechorías o disfrutamos de nuestra vida virtual en Los Santos, una ciudad en la que nos aguardan innumerables sorpresas y actividades.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/7.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Avatar</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>La historia nos pone en la piel de un guerrero Na´vi que ha visto como su pueblo ha sido arrasado por los invasores humanos, por lo que decide vengarse e ir en busca del responsable de todo, un tal Sean.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/8.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h4>Anthem</h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p>Su historia nos lleva a Bastión, un fascinante mundo de ciencia ficción plagado de extrañas criaturas, bellos parajes naturales y misterios por descubrir.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-4">
				<button class="site-btn btn-sm">Carga Más</button>
			</div>
		</div>
	</section>
	<!-- Page section end -->


	<!-- Review section -->
	<section class="review-section review-dark spad set-bg" data-setbg="img/review-bg-2.jpg">
		<div class="container">
			<div class="section-title text-white">
				<div class="cata new">nuevo</div>
				<h2>Últimas Noticias</h2>
			</div>
			<div class="row text-white">
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/1.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h5>Assasin’s Creed</h5>
							<p>Assassins Creed Valhalla ha superado los 20 millones de jugadores.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/2.jpg">
							<div class="score purple">9.5</div>
						</div>
						<div class="review-text">
							<h5>Doom</h5>
							<p>DOOM 2 RPG, el juego de móviles de 2005, por fin se puede jugar en PC con un mod.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/3.jpg">
							<div class="score green">9.1</div>
						</div>
						<div class="review-text">
							<h5>Overwatch</h5>
							<p>Overwatch 2 descarta el modo historia, pero habrá misiones cooperativas.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/4.jpg">
							<div class="score pink">9.7</div>
						</div>
						<div class="review-text">
							<h5>GTA</h5>
							<p>El éxito de Grand Theft Auto Online fue totalmente inesperado para Rockstar.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/footer-logo.png" alt="">
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Últimas Publicaciones</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">Enero 21, 2023</div>
									<p>Zelda: Tears of the Kingdom vuelve a sorprender con la recompensa de las semillas de Kolog</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpeg"></div>
								<div class="lb-content">
									<div class="lb-date">Febrero 13, 2023</div>
									<p>Reserva Bayonetta Origins: Cereza and the Lost Demon en GAME y llévate un regalo exclusivo</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">Marzo 5, 2023</div>
									<p>La expansión World of Warcraft: Burning Crusade Classic se lanza el 1 de junio</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Top Comentarios</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>en</span> World of Warcraft </p>
									<div class="tc-date">Enero 21, 2023</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Vin Diesel</a> <span>en</span> Bayonetta </p>
									<div class="tc-date">Febrero 13, 2023</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Paul Walker</a> <span>en</span> Tears of the Kingdom </p>
									<div class="tc-date">Marzo 5, 2023</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Gal Gadot</a> <span>en</span> Grand Theft Auto </p>
									<div class="tc-date">Abril 24, 2023</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="review.php">Juegos</a></li>
				<li><a href="categories.php">Blog</a></li>
				<li><a href="foro/index.php">Foro</a></li>
				<li><a href="contact.php">Contacto</a></li>
			</ul>
			<p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> || Esta web está hecha por <a href="https://www.linkedin.com/in/marta-torres-rubio/" target="_blank">Marta Torres Rubio</a></p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>