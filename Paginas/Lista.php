<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Lista.css">
  <link rel="stylesheet" href="../Assets/Css/NavAutor.css">
    <title>Lista de asistentes</title>

</head>
			<?php
			error_reporting(0);
			require '../Conexiones/ConexionBase/Conexion.php';
			session_start();
			$nom=mysqli_query($mysqli, "SELECT * FROM congreso");
			?>
<body>
    <?php require "../Parciales/navOrganizador.php";?>
    <div class="barra">Revisión de credenciales y certificados</div>
	<div class="eve">Congreso:</div>
	<form action="Lista.php" method="get">
    <div class="opcns">
		<select name="doc" id="doc">
			<option disabled selected>Eventos</option>
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


	<form action="Lista.php" method="post">
	<div class="busq">Buscar asistente:<input type="text" name="bus" id="bus"></div>
	<div class="busc"><input type="submit" value="Buscar"></div>
	</form>

	<div class="list" scrolling="auto">
		<table >
		<?php
			if($_GET) {
			$doc=$_GET['doc'];
			$nom1=mysqli_query($mysqli, "SELECT * FROM lista_asistentes WHERE Id_Congreso='$doc'");
			$cong = [];
			$cred = [];
			while($row1 = mysqli_fetch_array($nom1))  {
				$cong[] = $row1['Id_Asistente'];
				$cred[] = $row1['Id_ListaAsistentes'];
				}
			for ($i = 0; $i < count($cong); $i++)  {
			$j = $cong[$i];
			$nom2=mysqli_query($mysqli, "SELECT * FROM asistente WHERE Id_Asistente='$j'");
			while($row2 = mysqli_fetch_array($nom2))
				{
				echo "<tr>";
				echo "<td  class='border'>".$row2['Nombre']."&nbsp".$row2['APaterno']."&nbsp".$row2['AMaterno']."- - - - - -".$row2['Correo']."</td>";
				echo "<td><button type='button' onClick='window.location = \"Credencial.php?id=".$cred[$i]."\";'>Ver credencial</button></td>";
				echo "</tr>";
				}
			}
			}
			if($_POST) {
			$doc=$_POST['bus'];
			$nom3=mysqli_query($mysqli, "SELECT * FROM asistente WHERE Nombre LIKE '%$doc%'");
			while($row3 = mysqli_fetch_array($nom3))  {
				echo "<tr>";
				echo "<td  class='border'>".$row3['Nombre']."&nbsp".$row3['APaterno']."&nbsp".$row3['AMaterno']."- - - - - -".$row3['Correo']."</td>";
				echo "<td><button type='button' onClick='window.location = \"Eventos.php?id=".$row3['Id_Asistente']."\";'>Ver Eventos</button></td>";
				echo "</tr>";
				}
			}

			?>
		</table>
	</div>


	<div class="regresar"><button type="button" onClick='window.location ="Login.php";'>Regresar</button></textarea></div>
</body>

</html>
