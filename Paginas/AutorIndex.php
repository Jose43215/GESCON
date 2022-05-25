<?php
  session_start();
  require '../Conexiones/ConexionBase/Conexion.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autor Index</title>
    <link rel="stylesheet" href="../Assets/Css/Nav.css">
    <link rel="stylesheet" href="../Assets/Css/footer.css">
    <link rel="stylesheet" href="../Assets/Css/Autor.css">
  </head>
  <body>
    <?php if(!empty($_SESSION)): ?>

      <?php require "../Parciales/navAutor.php";?>
      <div class="content">
        <div class="saludo">
          <h2>Bienvenido Autor <?php echo($_SESSION['Nombre']) ?></h2>
        </div>
        <div class="titulo">
          <h3>Mis Articulos</h3>
        </div>
        <br><br>
        <div class="articulos">
          div.
        </div>
      </div>

    <?php else: ?>
      <h1>Por Favor Inicie Sesión o Registrese</h1>
      <a href="Login.php">Iniciar Sesión</a> O
      <a href="">Registrarse</a>
    <?php endif; ?>
  </body>
</html>
