<?php
  session_start();
  require '../Conexiones/ConexionBase/Conexion.php';
  if (isset($_POST['Aceptar'])) {
    switch ($_POST['tabla']) {
      case 1:
        $especialidad = $_POST['Especialidad'];
        $mensaje = '';

        $consulta = "INSERT INTO especialidades (Especialidad) VALUES ('$especialidad')";
        if(!$mysqli->query($consulta)){
          printf("Errormessage: %s\n", $mysqli->error);
        }else{
          header('location: JefeIndex.php');
        }
      break;

      case 2:
        $especialidad = $_POST['Especialidad'];
        $mensaje = '';

        $consulta = "INSERT INTO especialidades_organizador (Especialidad) VALUES ('$especialidad')";
        if(!$mysqli->query($consulta)){
          printf("Errormessage: %s\n", $mysqli->error);
        }else{
          header('location: JefeIndex.php');
        }
      break;
    }  
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jefe Index</title>
    <link rel="stylesheet" href="../Assets/Css/Nav.css">
    <link rel="stylesheet" href="../Assets/Css/footer.css">
    <link rel="stylesheet" href="../Assets/Css/Jefe.css">
  </head>
  <body>
    <?php if(!empty($_SESSION)): ?>

      <?php require "../Parciales/navJefe.php";?>
      
      <div class="saludo">
        <h2>Bienvenido Jefe de Comite <?php echo($_SESSION['Nombre']) ?></h2>
      </div>
      <form action="" method="post">  
        <div class="content">
          <div class="titulo">
            <h3>Registrar Especialidad</h3>
          </div>
          <div class="registro">
            <p class="texto">Escriba el nombre de la especialidad a registrar</p><br>
            <input type="text" name="Especialidad" class="input" required>
            <input type="number" value="1" name="tabla" hidden>
            <input type="submit" value="Registrar Especialidad" class="button-register" name="Aceptar">
          </div>
        </div>
      </form>
      <form action="" method="post">
      <div class="content">
        <div class="titulo">
          <h3>Registrar Especialidad para Organizadores</h3>
        </div>
        <div class="registro">
          <p class="texto">Escriba el nombre de la especialidad de los organizadores a registrar</p><br>
          <input type="text" name="Especialidad" class="input" required>
          <input type="number" value="2" name="tabla" hidden>
          <input type="submit" value="Registrar Especialidad" class="button-register" name="Aceptar">
        </div>
      </div>  
      <form action="" method="post">

    <?php else: ?>
      <h1>Por Favor Inicie Sesión o Registrese</h1>
      <a href="Login.php">Iniciar Sesión</a> O
      <a href="Sign_up.php">Registrarse</a>
    <?php endif; ?>
  </body>
</html>
