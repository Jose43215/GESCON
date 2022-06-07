<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Inscripcion.css">
  <link rel="stylesheet" href="../Assets/Css/NavAutor.css">
    <title>Inscripción</title>

</head>
			<?php
      session_start();
			error_reporting(0);
			require '../Conexiones/ConexionBase/Conexion.php';
			$nom=mysqli_query($mysqli, "SELECT * FROM congreso");
			?>

<body>
  <?php require "../Parciales/navAsistente.php";?>
    <div class="barra">Inscripción al congreso</div>
	  <div class="program1">Congreso:</div>
    <div class="opcns">
	<form method="get">
	<select name="prog" id="prog">
		<option disabled selected>Congresos</option>
		<?php
			while($row = mysqli_fetch_array($nom))
				{
				echo "<option value=".$row['Id_Congreso'].">".$row['NombreCongreso']."</option>";
				}
			?>
		</select>
	</div>
    <div class="actu"><input type="submit" value="Actualizar"></div>
	</form>




	<div class="list" scrolling="auto">
	<form method="post">
		<table>
			<?php
			if($_GET) {
			$cong=$_GET['prog'];
			$nom1=mysqli_query($mysqli, "SELECT * FROM programa WHERE Id_Congreso='$cong'");
			while($row1 = mysqli_fetch_array($nom1))
				{
				echo "<tr>";
				echo "<td  class='border'>".$row1['Id_Programa']." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row1['Fecha_Inicio']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type='button' onClick='window.location = \"Programa.php?id=".$row1['Id_Programa']."\";'>Ver programa</button></td>";
				echo "<td><input type='checkbox' name='insc[]' value='".$row1['Id_Programa']."'>Agregar a la inscripción</button></td>";
				echo "</tr>";
				}
			}
			?>
		</table>
		<div class="pag"><input type="submit" value="Actualizar"></div>
		</form>
	</div>

	<div class="advert">Una vez que se haya inscrito a los eventos, recibirá notificaciones sobre los cambios que puedan realizarse</div>
	<?php
			if($_POST) {

			$inscr=$_POST['insc'];
			session_start();
			$_SESSION['ins'] = $inscr;
			$tota = 0;
			for ($i = 0; $i < count($inscr); $i++)  {
				$tota = $tota + 100;
			}
			echo "<div class='tot'>Total: $".$tota;
			}
			echo "</div>";
			if($tota!=0){
				echo "<div class='regresar'><button type='button' onClick='window.location = \"insertar.php\";'>Inscribir</button></div>";
			}
			?>

	<div class="regres"><button type="button" onClick='window.location ="Login.php";'>Regresar</button></textarea></div>
</body>

</html>
