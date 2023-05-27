<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Goro Games - Inicio</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Game Warrior Template" />
    <meta name="keywords" content="warrior, game, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"
      rel="stylesheet"
    />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <li><a href="index.html">Inicio</a></li>
            <li><a href="review.html">Juegos</a></li>
            <li><a href="categories.html">Blog</a></li>
            <li><a href="foro/index.php">Foro</a></li>
            <li><a href="contact.html">Contacto</a></li>
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

    <!-- Hero section -->
    <section class="hero-section">
      <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/slider-1.jpeg">
          <div class="hs-text">
            <div class="container">
              <h2>Los mejores <span>Juegos</span></h2>
              <p>
                Link queda gravemente herido en la batalla. Y es llevado a una
                cámara de <br />resurrección conocida como el santuario de la
                vida, mientras que Zelda usa su <br />magia para atrapar a
                Ganon. Transcurren cien años y Link despierta sin memoria <br />
                en un reino posapocalíptico devastado.
              </p>
              <a href="#" class="site-btn">Leer Más</a>
            </div>
          </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/slider-2.jpg">
          <div class="hs-text">
            <div class="container">
              <h2>Los mejores <span>Juegos</span></h2>
              <p>
                Bayonetta tiene lugar en Vigrid, una ciudad ficticia en Europa.
                El personaje principal <br />
                es una bruja que cambia de forma y usa varias armas de fuego,
                junto con ataques mágicos <br />que realiza con su propio
                cabello al convocar demonios para despachar a sus enemigos.
                <br />Ella se despierta después de un sueño de 500 años y se
                encuentra en un área desconocida <br />sin recuerdos.
              </p>
              <a href="#" class="site-btn">Leer Más</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero section end -->

    <!-- Latest news section -->
    <div class="latest-news-section">
      <div class="ln-title">Últimas noticias</div>
      <div class="news-ticker">
        <div class="news-ticker-contant">
          <div class="nt-item">
            <span class="new">nuevo</span>Construyen un vehículo de Star Wars en
            The Legend of Zelda: Tears of the Kingdom.
          </div>
          <div class="nt-item">
            <span class="strategy">estrategia</span>World of Warcraft
            Dragonflight: Todo lo que necesitas saber de la nueva expansión de
            WoW.
          </div>
          <div class="nt-item">
            <span class="racing">carreras</span>Rocket League da la bienvenida a
            nuevos aspectos para coches con temática de Star Wars.
          </div>
        </div>
      </div>
    </div>
    <!-- Latest news section end -->

    <!-- Feature section -->
    <section class="feature-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 p-0">
            <div class="feature-item set-bg" data-setbg="img/features/1.jpeg">
              <span class="cata new">nuevo</span>
              <div class="fi-content text-white">
                <h5>
                  <a href="#"
                    >Construyen un vehículo de Star Wars en The Legend of Zelda:
                    Tears of the Kingdom</a
                  >
                </h5>
                <p>
                  Un habilidoso jugador de Zelda: Tears of the Kingdom ha
                  conseguido crear el podracer de Anakin Skywalker que podemos
                  ver en Star Wars - Episodio I: La Amenaza Fantasma.
                </p>
                <a href="#" class="fi-comment">3 Comentarios</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-0">
            <div class="feature-item set-bg" data-setbg="img/features/2.jpg">
              <span class="cata strategy">estrategia</span>
              <div class="fi-content text-white">
                <h5>
                  <a href="#"
                    >World of Warcraft Dragonflight: Todo lo que necesitas saber
                    de la nueva expansión de WoW</a
                  >
                </h5>
                <p>
                  Dragonflight, la próxima gran expansión de World of Warcraft,
                  introducirá nueva raza y clase, nueva zona del mapa, cambios
                  en la interfaz y muchas otras novedades. Se lanzará el 28 de
                  noviembre.
                </p>
                <a href="#" class="fi-comment">2 Comentarios</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-0">
            <div class="feature-item set-bg" data-setbg="img/features/3.jpg">
              <span class="cata new">nuevo</span>
              <div class="fi-content text-white">
                <h5>
                  <a href="#"
                    >PlatinumGames explica cómo nació Bayonetta Origins: Cereza
                    and the Lost Demon</a
                  >
                </h5>
                <p>
                  Hideki Kamiya y Makoto Okazaki, creativo y productor en
                  PlatinumGames, explican que la idea inicial de Bayonetta
                  Origins era la de 'atraer a gente que quizá no conociera la
                  serie'.
                </p>
                <a href="#" class="fi-comment">5 Comentarios</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-0">
            <div class="feature-item set-bg" data-setbg="img/features/4.jpg">
              <span class="cata racing">carreras</span>
              <div class="fi-content text-white">
                <h5>
                  <a href="#"
                    >Rocket League da la bienvenida a nuevos aspectos para
                    coches con temática de Star Wars</a
                  >
                </h5>
                <p>
                  El juego de carreras celebrará por todo lo alto el Día de Star
                  Wars el próximo 4 de mayo con un total de cuatro 'paquetes de
                  droides' con calcomanías y otros extras temáticos.
                </p>
                <a href="#" class="fi-comment">1 Comentario</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature section end -->

    <!-- Recent game section  -->
    <section
      class="recent-game-section spad set-bg"
      data-setbg="img/recent-game-bg.png"
    >
      <div class="container">
        <div class="section-title">
          <div class="cata new">nuevo</div>
          <h2>Últimos Juegos</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="recent-game-item">
              <div class="rgi-thumb set-bg" data-setbg="img/recent-game/1.jpg">
                <div class="cata new">nuevo</div>
              </div>
              <div class="rgi-content">
                <h5>
                  PS5 y Star Wars Jedi: Survivor fueron los más vendidos en
                  Europa durante abril
                </h5>
                <p>
                  Todas las consolas vendieron más que en abril de 2022 y Star
                  Wars Jedi: Survivor superó el debut de Fallen Order, que se
                  estrenó en noviembre de 2019.
                </p>
                <a href="#" class="comment">3 Comentarios</a>
                <div class="rgi-extra">
                  <div class="rgi-star">
                    <img src="img/icons/star.png" alt="" />
                  </div>
                  <div class="rgi-heart">
                    <img src="img/icons/heart.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="recent-game-item">
              <div class="rgi-thumb set-bg" data-setbg="img/recent-game/2.jpeg">
                <div class="cata racing">carreras</div>
              </div>
              <div class="rgi-content">
                <h5>
                  Forza Horizon 5 detalla todas las novedades de Rally
                  Adventure, su último DLC
                </h5>
                <p>
                  Nuevos vehículos, campaña, circuitos e incluso una nueva zona.
                  Esto es todo lo que incluye Forza Horizon 5 Rally Adventure,
                  el DLC que se lanzará el 29 de marzo.
                </p>
                <a href="#" class="comment">1 Comentario</a>
                <div class="rgi-extra">
                  <div class="rgi-star">
                    <img src="img/icons/star.png" alt="" />
                  </div>
                  <div class="rgi-heart">
                    <img src="img/icons/heart.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="recent-game-item">
              <div class="rgi-thumb set-bg" data-setbg="img/recent-game/3.jpeg">
                <div class="cata adventure">aventuras</div>
              </div>
              <div class="rgi-content">
                <h5>
                  Así ha ayudado Minecraft a la restauración de una iglesia en
                  Burgos
                </h5>
                <p>
                  Mojang Studios cuenta cómo el proyecto Minecraftéate creó una
                  réplica de la iglesia de Santiago Apóstol, en Villamorón
                  (Burgos) para apoyar una campaña de crowdfunding para su
                  restauración.
                </p>
                <a href="#" class="comment">4 Comentarios</a>
                <div class="rgi-extra">
                  <div class="rgi-star">
                    <img src="img/icons/star.png" alt="" />
                  </div>
                  <div class="rgi-heart">
                    <img src="img/icons/heart.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Recent game section end -->

    <!-- Review section -->
    <section class="review-section spad set-bg" data-setbg="img/review-bg.png">
      <div class="container">
        <div class="section-title">
          <div class="cata new">nuevo</div>
          <h2>Últimas Noticias</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="review-item">
              <div class="review-cover set-bg" data-setbg="img/review/1.jpg">
                <div class="score yellow">9.3</div>
              </div>
              <div class="review-text">
                <h5>Assasin’s Creed</h5>
                <p>
                  Assassins Creed Valhalla ha superado los 20 millones de
                  jugadores.
                </p>
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
                <p>
                  DOOM 2 RPG, el juego de móviles de 2005, por fin se puede
                  jugar en PC con un mod.
                </p>
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
                <p>
                  Overwatch 2 descarta el modo historia, pero habrá misiones
                  cooperativas.
                </p>
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
                <p>
                  El éxito de Grand Theft Auto Online fue totalmente inesperado
                  para Rockstar.
                </p>
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
          <img src="img/footer-top-bg.png" alt="" />
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="footer-logo text-white">
              <img src="img/footer-logo.png" alt="" />
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="footer-widget mb-5 mb-md-0">
              <h4 class="fw-title">Últimas Publicaciones</h4>
              <div class="latest-blog">
                <div class="lb-item">
                  <div
                    class="lb-thumb set-bg"
                    data-setbg="img/latest-blog/1.jpg"
                  ></div>
                  <div class="lb-content">
                    <div class="lb-date">Enero 21, 2023</div>
                    <p>
                      Zelda: Tears of the Kingdom vuelve a sorprender con la
                      recompensa de las semillas de Kolog
                    </p>
                    <a href="#" class="lb-author">By Admin</a>
                  </div>
                </div>
                <div class="lb-item">
                  <div
                    class="lb-thumb set-bg"
                    data-setbg="img/latest-blog/2.jpeg"
                  ></div>
                  <div class="lb-content">
                    <div class="lb-date">Febrero 13, 2023</div>
                    <p>
                      Reserva Bayonetta Origins: Cereza and the Lost Demon en
                      GAME y llévate un regalo exclusivo
                    </p>
                    <a href="#" class="lb-author">By Admin</a>
                  </div>
                </div>
                <div class="lb-item">
                  <div
                    class="lb-thumb set-bg"
                    data-setbg="img/latest-blog/3.jpg"
                  ></div>
                  <div class="lb-content">
                    <div class="lb-date">Marzo 5, 2023</div>
                    <p>
                      La expansión World of Warcraft: Burning Crusade Classic se
                      lanza el 1 de junio
                    </p>
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
                  <div
                    class="tc-thumb set-bg"
                    data-setbg="img/authors/1.jpg"
                  ></div>
                  <div class="tc-content">
                    <p>
                      <a href="#">James Smith</a> <span>en</span> World of
                      Warcraft
                    </p>
                    <div class="tc-date">Enero 21, 2023</div>
                  </div>
                </div>
                <div class="tc-item">
                  <div
                    class="tc-thumb set-bg"
                    data-setbg="img/authors/1.jpg"
                  ></div>
                  <div class="tc-content">
                    <p><a href="#">Vin Diesel</a> <span>en</span> Bayonetta</p>
                    <div class="tc-date">Febrero 13, 2023</div>
                  </div>
                </div>
                <div class="tc-item">
                  <div
                    class="tc-thumb set-bg"
                    data-setbg="img/authors/1.jpg"
                  ></div>
                  <div class="tc-content">
                    <p>
                      <a href="#">Paul Walker</a> <span>en</span> Tears of the
                      Kingdom
                    </p>
                    <div class="tc-date">Marzo 5, 2023</div>
                  </div>
                </div>
                <div class="tc-item">
                  <div
                    class="tc-thumb set-bg"
                    data-setbg="img/authors/1.jpg"
                  ></div>
                  <div class="tc-content">
                    <p>
                      <a href="#">Gal Gadot</a> <span>en</span> Grand Theft Auto
                    </p>
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
          <li><a href="index.html">Inicio</a></li>
          <li><a href="review.html">Juegos</a></li>
          <li><a href="categories.html">Blog</a></li>
          <li><a href="foro/index.php">Foro</a></li>
          <li><a href="contact.html">Contacto</a></li>
        </ul>
        <p class="copyright">
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          || Esta web está hecha por
          <a
            href="https://www.linkedin.com/in/marta-torres-rubio/"
            target="_blank"
            >Marta Torres Rubio</a
          >
        </p>
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

<script>
  $(document).ready(function () {
    // Realiza una solicitud AJAX para obtener el nombre de usuario almacenado en la sesión
    $.ajax({
      url: "login.php", // Un archivo PHP que obtiene el nombre de usuario de la sesión
      method: "GET",
      success: function (response) {
        // Si se recibe un nombre de usuario, mostrar el saludo
        if (response.username) {
          $("#user-greeting").text("Hola, " + response.username);
        }
      },
    });
  });
</script>
