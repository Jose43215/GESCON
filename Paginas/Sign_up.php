<?php
    require '../Conexiones/ConexionBase/Conexion.php';

    if (isset($_POST['Aceptar'])) {
      switch ($_POST['tabla']) {
        case 1:
          $nombre = $_POST['Nombre'];
          $apat = $_POST['APaterno'];
          $amat = $_POST['AMaterno'];
          $correo = $_POST['Correo'];
          $contraseña = $_POST['Contraseña'];
          $mensaje = '';

          $consulta = "INSERT INTO autor (Nombre, APaterno, AMaterno, Correo, Contrasena) VALUES ('$nombre', '$apat', '$amat', '$correo', '$contraseña')";
          if(!$mysqli->query($consulta)){
            printf("Errormessage: %s\n", $mysqli->error);
          }else{
            header('location: Login.php');
          }
          break;
        case 2:
          $nombre = $_POST['Nombre'];
          $apat = $_POST['APaterno'];
          $amat = $_POST['AMaterno'];
          $correo = $_POST['Correo'];
          $contraseña = $_POST['Contraseña'];
          $especialidad = $_POST['Especialidad'];
          $mensaje = '';

          $consulta = "INSERT INTO revisor (Nombre, APaterno, AMaterno, Correo, Contrasena, Id_Especialidad) VALUES ('$nombre', '$apat', '$amat', '$correo', '$contraseña', '$especialidad')";
          if(!$mysqli->query($consulta)){
            printf("Errormessage: %s\n", $mysqli->error);
          }else{
            header('location: Login.php');
          }
          break;
        case 3:
          $nombre = $_POST['Nombre'];
          $apat = $_POST['APaterno'];
          $amat = $_POST['AMaterno'];
          $correo = $_POST['Correo'];
          $contraseña = $_POST['Contraseña'];
          $especialidad = $_POST['Especialidad'];
          $mensaje = '';

          $consulta = "INSERT INTO jefe_comite (Nombre, APaterno, AMaterno, Correo, Contrasena, Id_Especialidad) VALUES ('$nombre', '$apat', '$amat', '$correo', '$contraseña', '$especialidad')";
          if(!$mysqli->query($consulta)){
            printf("Errormessage: %s\n", $mysqli->error);
          }else{
            header('location: Login.php');
          }
          break;
        case 4:
          $nombre = $_POST['Nombre'];
          $apat = $_POST['APaterno'];
          $amat = $_POST['AMaterno'];
          $correo = $_POST['Correo'];
          $contraseña = $_POST['Contraseña'];
          $mensaje = '';

          $consulta = "INSERT INTO asistente (Nombre, APaterno, AMaterno, Correo, Contrasena) VALUES ('$nombre', '$apat', '$amat', '$correo', '$contraseña')";
          if(!$mysqli->query($consulta)){
            printf("Errormessage: %s\n", $mysqli->error);
          }else{
            header('location: Login.php');
          }
          break;
        case 5:
          $nombre = $_POST['Nombre'];
          $apat = $_POST['APaterno'];
          $amat = $_POST['AMaterno'];
          $correo = $_POST['Correo'];
          $contraseña = $_POST['Contraseña'];
          $especialidad = $_POST['Especialidad'];
          $mensaje = '';

          $consulta = "INSERT INTO organizador (Nombre, APaterno, AMaterno, Correo, Contrasena, Id_Especialidad) VALUES ('$nombre', '$apat', '$amat', '$correo', '$contraseña', '$especialidad')";
          if(!$mysqli->query($consulta)){
            printf("Errormessage: %s\n", $mysqli->error);
          }else{
            header('location: Login.php');
          }
          break;
        case 6:
          $nombre = $_POST['Nombre'];
          $apat = $_POST['APaterno'];
          $amat = $_POST['AMaterno'];
          $correo = $_POST['Correo'];
          $contraseña = $_POST['Contraseña'];
          $mensaje = '';

          $consulta = "INSERT INTO moderador (Nombre, APaterno, AMaterno, Correo, Contrasena) VALUES ('$nombre', '$apat', '$amat', '$correo', '$contraseña')";
          if(!$mysqli->query($consulta)){
            printf("Errormessage: %s\n", $mysqli->error);
          }else{
            header('location: Login.php');
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
    <title>Registrarse</title>
    <link rel="stylesheet" href="../Assets/Css/Nav.css">
    <link rel="stylesheet" href="../Assets/Css/Sign_up.css">

  </head>
  <body>

    <?php
      require "../Parciales/navIndexParciales.php";
    ?>
      <center class="titulo">Registrarse</center>
      <ul class="user-option">
        <li><a href="#" class="tablink" onclick="ViewUser(event, 'Autor');">Autor</a></li>
        <li><a href="#" class="tablink" onclick="ViewUser(event, 'Revisor');">Revisor</a></li>
        <li><a href="#" class="tablink" onclick="ViewUser(event, 'Jefe');">Jefe</a></li>
        <li><a href="#" class="tablink" onclick="ViewUser(event, 'Asistente');">Asistente</a></li>
        <li><a href="#" class="tablink" onclick="ViewUser(event, 'Organizador');">Organizador</a></li>
        <li><a href="#" class="tablink" onclick="ViewUser(event, 'Moderador');">Moderador</a></li>
      </ul>

      <div id="Autor" class="signup-container user">
        <form action="" method="post">
          <p class="subtitle">Crear cuenta de Autor</p>
          <div class="input-line-container">
            <span class="name-input">Nombre</span>
            <input type="text" name="Nombre" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Paterno</span>
            <input type="text" name="APaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Materno</span>
            <input type="text" name="AMaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Correo</span>
            <input type="email" name="Correo" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Contraseña</span>
            <input type="password" name="Contraseña" class="input-line" required>
          </div>
          <input type="number" value="1" name="tabla" hidden>
          <input type="submit" value="Enviar" class="button-signup" name="Aceptar">
        </form>
      </div>

      <div id="Revisor" class="signup-container user">
        <form action="" method="post">
          <p>Crear cuenta de Revisor</p>
          <div class="input-line-container">
            <span class="name-input">Nombre</span>
            <input type="text" name="Nombre" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Paterno</span>
            <input type="text" name="APaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Materno</span>
            <input type="text" name="AMaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Correo</span>
            <input type="email" name="Correo" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Contraseña</span>
            <input type="password" name="Contraseña" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Especialidad</span>
            <select name="Especialidad" class="input-select" required>
            <?php
              $consulta1 = "SELECT * From especialidades";
              $resultado1 = $mysqli->query($consulta1);

              while($filas1 = $resultado1->fetch_assoc()){
                $id = $filas1['Id_Especialidad'];
                $nombre = $filas1['Especialidad'];
                echo "<option value='$id' class='select-opcion'>$nombre</option>";
              }
            ?>
          </select>
          </div>
          <input type="number" value="2" name="tabla" hidden>
          <input type="submit" value="Enviar" class="button-signup" name="Aceptar">
        </form>
      </div>

      <div id="Jefe" class="signup-container user">
        <form action="" method="post">
          <p>Crear cuenta de Jefe</p>
          <div class="input-line-container">
            <span class="name-input">Nombre</span>
            <input type="text" name="Nombre" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Paterno</span>
            <input type="text" name="APaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Materno</span>
            <input type="text" name="AMaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Correo</span>
            <input type="email" name="Correo" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Contraseña</span>
            <input type="password" name="Contraseña" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Especialidad</span>
            <select name="Especialidad" class="input-select" required>
            <?php
              $consulta2 = "SELECT * From especialidades";
              $resultado2 = $mysqli->query($consulta2);

              while($filas2 = $resultado2->fetch_assoc()){
                $id = $filas2['Id_Especialidad'];
                $nombre = $filas2['Especialidad'];
                echo "<option value='$id' class='select-opcion'>$nombre</option>";
              }
            ?>
          </select>
          </div>
          <input type="number" value="3" name="tabla" hidden>
          <input type="submit" value="Enviar" class="button-signup" name="Aceptar">
        </form>
      </div>

      <div id="Asistente" class="signup-container user">
        <form action="" method="post">
          <p>Crear cuenta de Asistente</p>
          <div class="input-line-container">
            <span class="name-input">Nombre</span>
            <input type="text" name="Nombre" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Paterno</span>
            <input type="text" name="APaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Materno</span>
            <input type="text" name="AMaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Correo</span>
            <input type="email" name="Correo" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Contraseña</span>
            <input type="password" name="Contraseña" class="input-line" required>
          </div>
          <input type="number" value="4" name="tabla" hidden>
          <input type="submit" value="Enviar" class="button-signup" name="Aceptar">
        </form>
      </div>

      <div id="Organizador" class="signup-container user">
        <form action="" method="post">
          <p>Crear cuenta de Organizador</p>
          <div class="input-line-container">
            <span class="name-input">Nombre</span>
            <input type="text" name="Nombre" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Paterno</span>
            <input type="text" name="APaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Materno</span>
            <input type="text" name="AMaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Correo</span>
            <input type="email" name="Correo" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Contraseña</span>
            <input type="password" name="Contraseña" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Especialidad</span>
            <select name="Especialidad" class="input-select" required>
            <?php
              $consulta3 = "SELECT * From especialidades_organizador";
              $resultado3 = $mysqli->query($consulta3);

              while($filas3 = $resultado3->fetch_assoc()){
                $id = $filas3['Id_Especialidad'];
                $nombre = $filas3['Especialidad'];
                echo "<option value='$id' class='select-opcion'>$nombre</option>";
              }
            ?>
          </select>
          </div>
          <input type="number" value="5" name="tabla" hidden>
          <input type="submit" value="Enviar" class="button-signup" name="Aceptar">
        </form>
      </div>

      <div id="Moderador" class="signup-container user">
        <form action="" method="post">
          <p>Crear cuenta de Moderador</p>
          <div class="input-line-container">
            <span class="name-input">Nombre</span>
            <input type="text" name="Nombre" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Paterno</span>
            <input type="text" name="APaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Apellido Materno</span>
            <input type="text" name="AMaterno" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Correo</span>
            <input type="email" name="Correo" class="input-line" required>
          </div>
          <div class="input-line-container">
            <span class="name-input">Contraseña</span>
            <input type="password" name="Contraseña" class="input-line" required>
          </div>
          <input type="number" value="6" name="tabla" hidden>
          <input type="submit" value="Enviar" class="button-signup" name="Aceptar">
        </form>
      </div>

      <script>
        function ViewUser(evt, user) {
          var i, x, tablinks;
          x = document.getElementsByClassName("user");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" user-selected", "");
          }
          document.getElementById(user).style.display = "block";
          evt.currentTarget.className += " user-selected";
        }
      </script>
      <br>
  </body>
</html>
