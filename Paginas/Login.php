<?php
    require '../Conexiones\ConexionBase\Conexion.php';

    if (isset($_POST['Aceptar'])) {
      if (!empty($_POST['Correo']) && !empty($_POST['Contraseña'])) {

        $Correo = $_POST['Correo'];
        $Contraseña=$_POST['Contraseña'];
        $TiposUsuario = $_POST['Usuario'];

        switch($_POST['Usuario']){
          case 1:
            echo "Autor";
            break;
          case 2:
            echo "Revisor";
            break;
          case 3:
            echo "Jefe De Comité";
            break;
          case 4:
            echo "Asistente";
            break;
          case 5:
            echo "Organizador";
            break;
          case 6:
            echo "Moderador";
            break;
          case 7:
            echo "Administrador";
            break;
        }

      }
    }

        /*$records = "SELECT * From Usuario Where Correo='$Correo'";

        $Ejecutar = sqlsrv_query($con,$records);

        $Datos = sqlsrv_fetch_array($Ejecutar,SQLSRV_FETCH_ASSOC);

        $message = '';

        if(count($Datos) > 0 && password_verify($_POST['Contraseña'],$Datos['Contraseña'])){
          if ($Datos['Visibilidad']==1) {
          $_SESSION['Id_Usuario']=$Datos['Id_Usuario'];
          $_SESSION['TiposUsuario']=$Datos['TiposUsuario'];
          $_SESSION['Rol']=$Datos['Rol'];

            if ($_SESSION['TiposUsuario'] <= 2) {
              header('location: inicio.php');
            }elseif ($_SESSION['TiposUsuario'] > 2) {
              header('location: inicioSolicitante.php');
            }

        }else{
          $message = "<p style='color:#FF0000'>Tu estatus es inactivo<p/>";
        }
      }else{
        $message = "<p style='color:#FF0000'>No hay coincidencia en la base de datos<p/>";
      }
      }

    }*/
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
      require "../Parciales/navIndex.php";
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

    </div>
  </body>
</html>
