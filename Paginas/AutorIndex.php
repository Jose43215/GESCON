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
    <link rel="stylesheet" href="../Assets/Css/NavAutor.css">
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
        <div class="nuevo">
          <P>Nuevo articulo</P>
          <button type="button" name="button">Nuevo <img src="..\Assets\Recursos\Iconos\addnewdocument_118445.svg" height="30" width="60"></button>
        </div>
        <br><hr>

        <div class="tabla">
          <table>
            <thead>
              <tr>
                <th class="Tarticulo">Titulo Del Articulo</th>
                <th class="Tcongreso">Congreso</th>
                <th class="Tprograma">Programa</th>
                <th class="Testado">Estado</th>
                <th class="Tbotones">Acciones</th>
              </tr>
            </thead>
            <?php
              $consulta = "SELECT articulo.Id_Articulo,Titulo,NombreCongreso,TituloPonencia,Evaluacion
                           FROM articulo
                           INNER JOIN articulo_autor ON articulo_autor.Id_Articulo = articulo.Id_Articulo
                           INNER JOIN congreso ON congreso.Id_Congreso = articulo_autor.Id_Congreso
                           INNER JOIN ponencias ON ponencias.Id_Programa = articulo_autor.Id_Programa
                           INNER JOIN revisiones ON revisiones.Id_Articulo = articulo_autor.Id_Articulo
                           WHERE articulo_autor.Id_Autor =".$_SESSION['Id_Autor'];
              $resultado = $mysqli->query($consulta);

              while($filas = $resultado->fetch_assoc()){
                $IArticulo = $filas['Id_Articulo'];
                $titulo = $filas['Titulo'];
                $congreso = $filas['NombreCongreso'];
                $Ponencia = $filas['TituloPonencia'];
                $evaluacion = $filas['Evaluacion'];

                echo"
                  <tr>
                    <td>$titulo</td>
                    <td>$congreso</td>
                    <td>$Ponencia</td>
                    <td>$evaluacion</td>
                    <td>
                      <button class='Ver' type='button' name='button' onclick=\"window.location='VerArticuloAutor.php?Id=$IArticulo'\"><img src='..\Assets\Recursos\Iconos\bx-show.svg'></button>
                      <button class='Editar' type='button' name='button' onclick=\"window.location='EditarArticulo.php?Id=$IArticulo'\"><img src='..\Assets\Recursos\Iconos\bxs-edit-alt.svg'></button>
                    </td>
                  </tr>
                ";
              }
             ?>
          </table>
        </div>

      </div>

    <?php else: ?>
      <h1>Por Favor Inicie Sesión o Registrese</h1>
      <a href="Login.php">Iniciar Sesión</a> O
      <a href="Sign_up.php">Registrarse</a>
    <?php endif; ?>
  </body>
</html>
