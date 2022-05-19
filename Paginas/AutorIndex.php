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
  </head>
  <body>
    <?php if(!empty($_SESSION)): ?>

      <?php require "../Parciales/navAutor.php";?>
      <h1>Bienvenido Autor <?=$_SESSION['Nombre']?></h1>

    <?php else: ?>
      <h1>Por Favor Inicie Sesión o Registrese</h1>
      <a href="Login.php">Iniciar Sesión</a> O
      <a href="">Registrarse</a>
    <?php endif; ?>
  </body>
</html>
