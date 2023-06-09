<!DOCTYPE html>
<html lang="es">
<head>
	<title>Goro Games - Contacto</title>
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

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script>
	 $(document).ready(function() {
		$("#submit-btn").click(function(event) {
			event.preventDefault();
			
			// Crea un elemento de alerta utilizando Bootstrap
			var alertElement = $('<div class="alert alert-success mt-4">Mensaje enviado correctamente! :)</div>');
			
			// Inserta el elemento de alerta después del formulario
			$("#contact-form").after(alertElement);
		});
	 });
	</script>

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
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/5.jpeg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h3>Contáctanos</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section spad contact-page">
		<div class="container">
			<div class="map" id="map-canvas"></div>
			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="comment-title">Nuestro Contacto</h4>
					<div class="row">
						<div class="col-md-9">
							<ul class="contact-info-list">
								<li><div class="cf-left">Dirección</div><div class="cf-right">XXXXXX</div></li>
								<li><div class="cf-left">Teléfono</div><div class="cf-right">XXXXXX</div></li>
								<li><div class="cf-left">E-mail</div><div class="cf-right">XXXXXX</div></li>
							</ul>
						</div>
					</div>
					<div class="social-links">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Deja un mensaje</h4>
						<form id="contact-form" class="comment-form">
							<div class="row">
							  <div class="col-md-6">
								<input type="text" placeholder="Nombre">
							  </div>
							  <div class="col-md-6">
								<input type="email" placeholder="Email">
							  </div>
							  <div class="col-lg-12">
								<input type="text" placeholder="Tema">
								<textarea placeholder="Mensaje"></textarea>
								<button id="submit-btn" class="site-btn btn-sm">Enviar</button>
							  </div>
							</div>
						</form>
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


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="js/map.js"></script>

    </body>
</html>