<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
  // Redirigir al usuario a la página de index.html
  header("location: index.php");
  exit;
}

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Recuperar los valores enviados por el usuario
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  // Verificar si los datos son correctos
  if ($usuario == 'admin' && $contrasena == 'pass') {
    // Iniciar la sesión del usuario y redirigir a la página de index.html
    $_SESSION['usuario'] = $usuario;
    setcookie('usuario', $usuario, time() + 86400, "/");
    header("location: index.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Goro Games - Iniciar Sesión</title>
        <meta charset="UTF-8">
        <meta name="description" content="Game Warrior Template">
        <meta name="keywords" content="warrior, game, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Favicon -->   
        <link href="img/favicon.ico" rel="shortcut icon"/>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/login.css"/>
    </head>
    <body>
        
        <div class="container">
            <div class="backbox">
              <div class="loginMsg">
                <div class="textcontent">
                  <p class="title">No tienes cuenta?</p>
                  <button id="switch1">REGISTRARSE</button>
                </div>
              </div>
              <div class="signupMsg visibility">
                <div class="textcontent">
                  <p class="title">Ya tienes cuenta?</p>
                  <button id="switch2">INICIAR SESIÓN</button>
                </div>
              </div>
            </div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="frontbox">
              <div class="login">
                <h2>INICIO DE SESIÓN</h2>
                <div class="inputbox">
                  <input type="text" name="usuario" id="usuario" placeholder="  Usuario" required>
                  <input type="password" name="contrasena" id="contrasena" placeholder="  Contraseña" required>
                </div>
                <p>Olvidaste tu contraseña?</p>
                <button type="submit">INICIAR SESIÓN</button>
              </div>
            </form>
              <div class="signup hide">
                <h2>REGISTRO</h2>
                <div class="inputbox">
                  <input type="text" name="user" placeholder="  Usuario">
                  <input type="text" name="email" placeholder="  Correo">
                  <input type="password" name="password" placeholder="Contraseña">
                </div>
                <button>REGISTRARSE</button>
              </div>
            </div>
          </div>

          <!--====== Javascripts & Jquery ======-->
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          <script src="js/login.js"></script>
    </body>
</html>