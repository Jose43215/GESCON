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
    <title>Ver Articulo</title>
    <link rel="stylesheet" href="../Assets/Css/NavAutor.css">
    <link rel="stylesheet" href="../Assets/Css/VerArticuloAutor.css">
  </head>
  <body>
    <?php if(!empty($_SESSION)): ?>
      <?php require "../Parciales/navAutor.php";?>

      <?php
        $Id = $_GET['Id'];
        $consulta = "SELECT Titulo,Fichero,Resumen,Topicos,Contribucion,Relevancia,Originalidad,Legibilidad,ValoracionGlobal,FamiliaridadDelRevisor,revision,Evaluacion,Fecha_Revision
                     FROM articulo
                     INNER JOIN revisiones ON revisiones.Id_Articulo = articulo.Id_Articulo
                     WHERE articulo.Id_Articulo = $Id ORDER BY Fecha_Revision ASC LIMIT 1";
        $resultado = $mysqli->query($consulta);
        $filas = $resultado->fetch_assoc();

        $titulo = $filas['Titulo'];
        $fichero = $filas['Fichero'];
        $Resumen = $filas['Resumen'];
        $Topicos = $filas['Topicos'];
        $Contribucion = $filas['Contribucion'];
        $Relevancia = $filas['Relevancia'];
        $Originalidad = $filas['Originalidad'];
        $Legibilidad = $filas['Legibilidad'];
        $ValoracionGlobal = $filas['ValoracionGlobal'];
        $FamiliaridadDelRevisor = $filas['FamiliaridadDelRevisor'];
        $revision = $filas['revision'];
        $Evaluacion = $filas['Evaluacion'];
        $Fecha_Revision = $filas['Fecha_Revision'];
       ?>

      <div class="content">
        <div class="titulo">
          <h3>Ver Articulo</h3>
        </div>
        <br><hr>

        <div class="visor">
          <p><?php echo($titulo); ?></p>
          <object type="application/pdf" data=<?php echo "\"../Articulos/$fichero\""; ?>></object>
        </div>

        <div class="evaluacion">
          <p>Evaluación</p>
          <table>
            <thead>
              <tr>
                <th>Datos</th>
                <th></th>
              </tr>
            </thead>
            <tr>
              <td>Titulo</td>
              <?php echo "<td>$titulo</td>"; ?>
            </tr>
            <tr>
              <td>Resumen</td>
              <?php echo "<td>$Resumen</td>"; ?>
            </tr>
            <tr>
              <td>Topicos</td>
              <?php echo "<td>$Topicos</td>"; ?>
            </tr>
            <thead>
              <tr>
                <th>Concepto</th>
                <th>Evaluación</th>
              </tr>
            </thead>
            <tr>
              <td>Contribucion</td>
              <?php echo "<td>$Contribucion</td>"; ?>
            </tr>
            <tr>
              <td>Relevancia</td>
              <?php echo "<td>$Relevancia</td>"; ?>
            </tr>
            <tr>
              <td>Originalidad</td>
              <?php echo "<td>$Originalidad</td>"; ?>
            </tr>
            <tr>
              <td>Legibilidad</td>
              <?php echo "<td>$Legibilidad</td>"; ?>
            </tr>
            <tr>
              <td>ValoracionGlobal</td>
              <?php echo "<td>$ValoracionGlobal</td>"; ?>
            </tr>
            <tr>
              <td>FamiliaridadDelRevisor</td>
              <?php echo "<td>$FamiliaridadDelRevisor</td>"; ?>
            </tr>
            <tr>
              <td>revision</td>
              <?php echo "<td>$revision</td>"; ?>
            </tr>
            <tr>
              <td>Evaluacion</td>
              <?php echo "<td>$Evaluacion</td>"; ?>
            </tr>
            <tr>
              <td>Fecha_Revision</td>
              <?php echo "<td>$Fecha_Revision</td>"; ?>
            </tr>
          </table>
        </div>

      </div>

    <?php else: ?>
      <h1>Por Favor Inicie Sesión o Registrese</h1>
      <a href="Login.php">Iniciar Sesión</a> O
      <a href="">Registrarse</a>
    <?php endif; ?>
  </body>
</html>
