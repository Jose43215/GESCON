<?php
	error_reporting(0);
	require '../Conexiones/ConexionBase/Conexion.php';
	require('FPDF/mc_table.php');
	$id = $_GET['id'];
	$nom1=mysqli_query($mysqli, "SELECT * FROM lista_asistentes WHERE Id_ListaAsistentes='$id'");
	while($row1 = mysqli_fetch_array($nom1))  {
				$cong = $row1['Id_Congreso'];
				$prog = $row1['Id_Programa'];
				$idla = $row1['Id_Asistente'];
	}
	$nom2=mysqli_query($mysqli, "SELECT * FROM asistente WHERE Id_Asistente='$idla'");
	while($row2 = mysqli_fetch_array($nom2))  {
				$nom = $row2['Nombre'];
				$ap = $row2['APaterno'];
				$am = $row2['AMaterno'];
				$cor = $row2['Correo'];

	}
	$nom3=mysqli_query($mysqli, "SELECT * FROM congreso WHERE Id_Congreso='$cong'");
	while($row3 = mysqli_fetch_array($nom3))  {
				$cong1 = $row3['NombreCongreso'];

	}

	$pdf=new PDF_MC_Table();
	$pdf->AddPage();
	$pdf->Image('FPDF/logo.png',10,8,200,200);
	$pdf->setHeader('Credencial de Asistencia');
	$pdf->cred($nom,$ap,$am,$cor,$prog,$cong1);
	$pdf->Output();
	//
?>
