<?php
    require '../Conexiones/ConexionBase/Conexion.php';

    if (isset($_POST['Aceptar'])) {
      if (!empty($_POST['Correo']) && !empty($_POST['Contraseña'])) {

        $Correo = $_POST['Correo'];
        $Contraseña=$_POST['Contraseña'];
        $TiposUsuario = $_POST['Usuario'];

        $mensaje = '';

        switch($_POST['Usuario']){
          case 1:
            session_start();
            $consulta = "SELECT * From Autor Where Correo='$Correo' AND Contrasena = '$Contraseña'";
            $resultado = $mysqli->query($consulta);
            $filas = $resultado->fetch_assoc();
            print_R($filas);

            if(!empty($filas)){
              $_SESSION['Id_Autor'] = $filas['Id_Autor'];
              $_SESSION['Nombre'] = $filas['Nombre'];
              $_SESSION['APaterno'] = $filas['APaterno'];
              $_SESSION['AMaterno'] = $filas['AMaterno'];
              $_SESSION['Correo'] = $filas['Correo'];
              $_SESSION['Contrasena'] = $filas['Contrasena'];

              header('location: AutorIndex.php');
            }else{
              $mensaje = "<p style='color:#FF0000'>Correo o Contraseña Incorrectos<p/>";
            }

            break;
          case 2:
            echo "Revisor";
            session_start();
            break;
          case 3:
            echo "Jefe De Comité";
            session_start();
            break;
          case 4:
            echo "Asistente";
            session_start();
            break;
          case 5:
            echo "Organizador";
            session_start();
            break;
          case 6:
            echo "Moderador";
            session_start();
            break;
          case 7:
            echo "Administrador";
            session_start();
            break;
        }
      }
    }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../Assets/Css/Nav.css">
    <link rel="stylesheet" href="../Assets/Css/footer.css">
    <link rel="stylesheet" href="../Assets/Css/Login.css">
  </head>
  <body>
    <?php
      require "../Parciales/navIndexParciales.php";
    ?>

    <div class="login-container" id="LoginContainer">
      <h1 class="title">Login</h1>

      <form action="" method="post">
        <div class="input-line-container">
          <span class="name-input">Correo</span>
          <input type="email" name="Correo" class="input-line" required>
        </div>
        <div class="input-line-container">
          <span class="name-input">Contraseña</span>
          <input type="password" name="Contraseña" class="input-line" required>
        </div>
        <div class="input-line-container">
          <span class="name-input">Tipo Usuario</span>
          <select name="Usuario" class="input-select" required>
            <option value="1" class="select-opcion">Autor</option>
            <option value="2" class="select-opcion">Revisor</option>
            <option value="3" class="select-opcion">Jefe de Comite</option>
            <option value="4" class="select-opcion">Asistente</option>
            <option value="5" class="select-opcion">Organizador</option>
            <option value="6" class="select-opcion">Moderador</option>
            <option value="7" class="select-opcion">Administrador</option>
        </div>
        <input type="submit" value="login" class="button-login" name="Aceptar">
      </form>
      <?php if (!empty($mensaje)): ?>
        <p><?= $mensaje ?></p>
      <?php endif; ?>
    </div>
  </body>
</html>
