<?php
	error_reporting(0);
	require '../Conexiones/ConexionBase/Conexion.php';
	session_start();

	for ($i = 0; $i < count($_SESSION['ins']); $i++)  {
		$inscri=$_SESSION['ins'][$i];
		$nom=mysqli_query($mysqli, "SELECT * FROM programa WHERE Id_Programa='$inscri'");
		$row = mysqli_fetch_array($nom);
		$cong = $row['Id_Congreso'];
		$IdU = $_SESSION['Id_Asistente'];
		mysqli_query($mysqli, "INSERT INTO lista_asistentes (Id_ListaAsistentes, Id_Asistente, Id_Congreso, Id_Programa) VALUES (NULL,'$IdU','$cong','$inscri')");
		header('Location:Inscripcion.php');
	}
	//
?>
