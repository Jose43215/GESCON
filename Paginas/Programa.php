<?php
	error_reporting(0);
	require '../Conexiones/ConexionBase/Conexion.php';
	require('FPDF/mc_table.php');
	$id = $_GET['id'];
	$nom1=mysqli_query($mysqli, "SELECT * FROM programa WHERE Id_Programa='$id'");
	$nom2=mysqli_query($mysqli, "SELECT * FROM eventos WHERE Id_Programa='$id'");
	$nom3=mysqli_query($mysqli, "SELECT * FROM ponencias WHERE Id_Programa='$id'");

//	while($row1 = mysqli_fetch_array($nom2))  {
//				echo $row1['TituloEvento']." | ";
//				echo $row1['DescripcionEvento']." | ";
//				echo $row1['Fecha_Inicio']." | ";
//				echo $row1['Fecha_fFinal']." | ";
//	}
	$pdf=new PDF_MC_Table();
	$pdf->AddPage();
	$pdf->setHeader('Programa '.$id);
	$pdf->SetFont('Arial','',14);
	$pdf->SetWidths(array(40,40,40,40));
	srand(microtime()*1000000);
	$pdf->Row(array('Evento','Descripcion','Inicio','Final'));
	while($row1 = mysqli_fetch_array($nom2))
		$pdf->Row(array($row1['TituloEvento'],$row1['DescripcionEvento'],$row1['Fecha_Inicio'],$row1['Fecha_fFinal']));
	$pdf->Jump();
	$pdf->SetWidths(array(40,40,40,40));
	srand(microtime()*1000000);
	$pdf->Row(array('Ponencia','Descripcion','Inicio','Final'));
	while($row2 = mysqli_fetch_array($nom3))
		$pdf->Row(array($row2['TituloPonencia'],$row2['DescripcionPonencia'],$row2['Fecha_Inicio'],$row2['Fecha_Final']));
	$pdf->Output();
?>
