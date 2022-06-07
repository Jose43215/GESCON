<?php
	error_reporting(0);
	require '../Conexiones/ConexionBase/Conexion.php';
	require('FPDF/mc_table.php');
	$id = $_GET['id'];
	$nom1=mysqli_query($mysqli, "SELECT * FROM asistente WHERE Id_Asistente='$id'");
	while($row1 = mysqli_fetch_array($nom1))  {
				$a = $row1['Nombre'];
				$b = $row1['APaterno'];
				$c = $row1['AMaterno'];
	}
	$nom2=mysqli_query($mysqli, "SELECT * FROM lista_asistentes WHERE Id_Asistente='$id'");
	$idp = [];
	$idp1 = [];
	while($row2 = mysqli_fetch_array($nom2))  {
				$idp = $row2['Id_Congreso'];
				$idp1 = $row2['Id_Programa'];
	}

	$pdf=new PDF_MC_Table();
	$pdf->AddPage();
	$pdf->setHeader('Asistencias de '.$a.' '.$b.' '.$c);
	$pdf->SetFont('Arial','',14);
	$pdf->SetWidths(array(38,38,38,38,38));
	srand(microtime()*1000000);
	//print_r($idp);
	$pdf->Row(array('Congreso','Descripcion','Topicos','Inicio','Final'));
	for($i = 0; $i < count($idp); $i++){
		//echo $i;
		$nom3=mysqli_query($mysqli, "SELECT * FROM congreso WHERE Id_Congreso='$idp'");
		while($row3 = mysqli_fetch_array($nom3)){
			$pdf->Row(array($row3['NombreCongreso'],$row3['DescripcionCongreso'],$row3['TopicosCongreso'],$row3['Fecha_Inicio'],$row3['Fecha_Termino']));
			//echo $row3['NombreCongreso'];
			//echo $row3['DescripcionCongreso'];
			//echo $row3['TopicosCongreso'];
			//echo $row3['Fecha_Inicio'];
			//echo $row3['Fecha_Termino'];
		}
	}
	$pdf->Jump();
	$pdf->SetWidths(array(40,40,40,40));
	srand(microtime()*1000000);
	$pdf->Row(array('Ponencia','Descripcion','Inicio','Final'));
	for($i = 0; $i < count($idp1); $i++){
		$nom4=mysqli_query($mysqli, "SELECT * FROM ponencias WHERE Id_Programa='$idp1'");
		while($row4 = mysqli_fetch_array($nom4)){
			$pdf->Row(array($row4['TituloPonencia'],$row4['DescripcionPonencia'],$row4['Fecha_Inicio'],$row4['Fecha_Final']));
		}
	}
	$pdf->Jump();
	$pdf->SetWidths(array(40,40,40,40));
	srand(microtime()*1000000);
	$pdf->Row(array('Evento','Descripcion','Inicio','Final'));
	for($i = 0; $i < count($idp1); $i++){
		$nom5=mysqli_query($mysqli, "SELECT * FROM eventos WHERE Id_Programa='$idp1'");
		while($row5 = mysqli_fetch_array($nom5)){
			$pdf->Row(array($row5['TituloEvento'],$row5['DescripcionEvento'],$row5['Fecha_Inicio'],$row5['Fecha_fFinal']));
		}
	}
	$pdf->Jump();
	$pdf->Output();
	//
?>
