<!DOCTYPE html>
<html lang="es">
<head>
	<title>Goro Games - Blog</title>
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
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h3>Galería de Vídeos</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/1.jpg">
									<div class="cata new">estrategia</div>
								</div>
								<div class="rgi-content">
									<h6>Secuela que pretende recoger conceptos clásicos de los títulos anteriores y presentar nuevas ideas bajo un espectacular apartado gráfico en 3D que nos llevará a la Edad Media.</h6>
									<a href="#" class="comment">3 Comentarios</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/2.jpeg">
									<div class="cata racing">carreras</div>
								</div>
								<div class="rgi-content">
									<h6>La primera expansión del arcade de conducción en mundo abierto añade 10 vehículos, cuatro zonas, una misión de historia, más de 80 pistas para EventLab y muchos kilómetros de carreteras naranja.</h6>
									<a href="#" class="comment">4 Comentarios</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/9.jpg">
									<div class="cata new">deportes</div>
								</div>
								<div class="rgi-content">
									<h6>Analizamos FIFA 22, una nueva entrega del simulador de fútbol que añade animaciones y nuevos sistemas para los títulos del futuro que, por ahora, tienen poco impacto jugable.</h6>
									<a href="#" class="comment">3 Comentarios</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/10.jpg">
									<div class="cata racing">laberinto</div>
								</div>
								<div class="rgi-content">
									<h6>Terraria: Journey’s End es la cuarta y última actualización que ha recibido este juego sandbox de aventuras y supervivencia.</h6>
									<a href="#" class="comment">6 Comentarios</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/11.jpg">
									<div class="cata adventure">aventura</div>
								</div>
								<div class="rgi-content">
									<h6>Anunciado Silent Hill F, un nuevo juego de la saga ambientado en el Japón de los años 60</h6>
									<a href="#" class="comment">2 Comentarios</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/12.jpeg">
									<div class="cata new">rol</div>
								</div>
								<div class="rgi-content">
									<h6>Diablo 4 desvela su fecha de lanzamiento en junio con una espectacular cinemática</h6>
									<a href="#" class="comment">0 Comentarios</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/13.jpeg">
									<div class="cata racing">plataformas</div>
								</div>
								<div class="rgi-content">
									<h6>Videoanálisis de Super Mario Odyssey</h6>
									<a href="#" class="comment">9 Comentarios</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<div class="site-pagination">
						<span class="active">01.</span>
						<a href="#">02.</a>
						<a href="#">03.</a>
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">
					<!-- widget -->
					<div class="widget-item">
						<form class="search-widget">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget-item">
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
					<!-- widget -->
					<div class="widget-item">
						<h4 class="widget-title">Top Comentarios</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span> en </span>Hogwarts Legacy</p>
									<div class="tc-date">Enero 21, 2023</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Michael James</a> <span> en </span>Avatar</p>
									<div class="tc-date">Febrero 13, 2023</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Justin More</a> <span> en </span>Anthem</p>
									<div class="tc-date">Marzo 5, 2023</div>
								</div>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<div class="feature-item set-bg" data-setbg="img/features/1.jpeg">
							<span class="cata new">nuevo</span>
							<div class="fi-content text-white">
								<h5><a href="#">Gameplay comentado, The Legend of Zelda: Tears of the Kingdom</a></h5>
								<a href="#" class="fi-comment">5 Comentarios</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->


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