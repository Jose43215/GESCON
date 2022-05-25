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
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w3.css">
<style>
.city {display:none;}
</style>
<body class="w3-container">

<p>Click on the links below:</p>

<ul class="w3-navbar w3-black">
  <li><a href="#" class="tablink" onclick="openCity(event, 'London');">London</a></li>
  <li><a href="#" class="tablink" onclick="openCity(event, 'Paris');">Paris</a></li>
  <li><a href="#" class="tablink" onclick="openCity(event, 'Tokyo');">Tokyo</a></li>
</ul>

<div id="London" class="w3-container w3-border city">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="w3-container w3-border city">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="w3-container w3-border city">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

</body>
</html> 