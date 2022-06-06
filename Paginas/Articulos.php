<?php
  session_start();
	require '../Conexiones/ConexionBase/Conexion.php';
?>
<script>
	function guardar(){
		Swal.fire({
			title: '¿Le gustaría guardar los cambios?',
			showDenyButton: true,
			showCancelButton: true,
			confirmButtonText: 'Guardar',
			denyButtonText: `No Guardar`,
			}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				Swal.fire('Se ha guardado correctamente!', '', 'success')
			} else if (result.isDenied) {
				Swal.fire('Los cambios no han sido guardados', '', 'info')
			}
		})

	}
	function terminar_revision(){
		Swal.fire({
			title: '¿Estas seguro de terminar la revisión?',
			text: "No podrás modificar la información una vez terminada la revisión!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, !terminar la revisión!'
			}).then((result) => {
			if (result.isConfirmed) {
				Swal.fire(
				'Revisión terminada!',
				'La revisión ha sido guardada y esta lista para su publicación',
				'success'
				)
			}
		})
	}
	function publicar(){
		Swal.fire({
			title: '¡Revisión publicada!',
			text: 'La revisión ha sido publicada correctamente',
			icon: 'success',
			confirmButtonText: 'Aceptar'
		})
	}

	function descarga(){
			Swal.fire({
				icon: 'error',
				title: 'Lo sentimos!',
				text: 'La opción de descarga aún no esta disponible!',
				footer: '<a href="">¿Cómo resolver este problema?</a>'
			})
		}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="../Assets/Css/Articulos.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="../Assets/Css/navRevisor.css">
	  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	  <script src="sweetalert2.min.js"></script>
	  <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Asignación de Artículos</title>

</head>
<body>

  <?php require "../Parciales/navRevisor.php";?>

	<div class="opcns">
		<div class="opc">Visualización de articulos asignados</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Articulo que desea buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-primary btn-sm" type="button" id="button-addon2">Buscar</button>
				</div>
			</div>


		Visualización de Articulos:
		<select name="doc" id="doc">
			<option disabled selected>Seleccione el tipo de documento que desea visualizar</option>
			<option value="asignados">Asignados</option>
			<option value="revisados">Revisados</option>
			<option value="pendientes">Pendientes</option>
			<option value="por revisar">Por revisar</option>
		</select>
		<br>
		<br>
		<table class="table">
			<thead class="thead-dark" >
				<tr>
				<th scope="col">Id_Articulo</th>
				<th scope="col">Titulo</th>
				<th scope="col">Fichero</th>
				<th scope="col">Resumen</th>
				<th scope="col">Topicos</th>

				</tr>
			</thead>
			<tbody>
				<?php
					$sql= "SELECT * from articulo";
					$result= $mysqli->query($sql);
					while ($mostrar= mysqli_fetch_array($result)){
				?>
				<tr>
				<td><input class="form-check-input" type="checkbox" value="" id="art_seleccionado"><?php echo $mostrar['Id_Articulo']?></td>
				<td><?php echo $mostrar['Titulo']?></td>
				<td><?php echo $mostrar['Fichero']?><button type="button" class="btn btn-primary btn-sm" onclick="window.location='DescargaArticuloRevisor.php?Id=<?php echo $mostrar['Id_Articulo'] ?>'">Descargar</button></td>
				<td><?php echo $mostrar['Resumen']?></td>
				<td><?php echo $mostrar['Topicos']?></td>
				</tr>
				<!---<button type="button" class="btn btn-primary btn-sm" >Descargar</button>--->
				<?php
					}
				?>
			</tbody>
		</table>
</div>

	<div class="evaluacion">
		<div class="opc">Evaluación de Artículos</div>
		<br>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Contribución: </label>
			</div>
			<select class="custom-select" id="inputGroupSelect01">
				<option selected>Elige la puntuación que consideres adecuada</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</div>

		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Relevancia: </label>
			</div>
			<select class="custom-select" id="inputGroupSelect01">
				<option selected>Elige la puntuación que consideres adecuada</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</div>

		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Originialidad: </label>
			</div>
			<select class="custom-select" id="inputGroupSelect01">
				<option selected>Elige la puntuación que consideres adecuada</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</div>

		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Legibilidad: </label>
			</div>
			<select class="custom-select" id="inputGroupSelect01">
				<option selected>Elige la puntuación que consideres adecuada</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</div>

		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Valoración Global: </label>
			</div>
			<select class="custom-select" id="inputGroupSelect01">
				<option selected>Elige la puntuación que consideres adecuada</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</div>

		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Familiaridad del Revisor: </label>
			</div>
			<select class="custom-select" id="inputGroupSelect01">
				<option selected>Elige la puntuación que consideres adecuada</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</div>

		<div class="opcom">Comentarios</div>
		<br>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Comentarios a:</label>
			</div>
			<select class="custom-select" id="inputGroupSelect01">
				<option selected>Seleccione a quien desea dejar un comentario</option>
				<option value="vg">Argumentos de Valoración Global</option>
				<option value="ca">Autor</option>
				<option value="cc">Comité</option>
			</select>
		</div>

		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Comentario</span>
			</div>
			<textarea class="form-control" aria-label="With textarea"></textarea>
		</div>
		<br>
		<button type="button" class="btn btn-info" onclick="guardar();">Guardar</button></textarea>
		<button type="button" class="btn btn-outline-success"onclick="terminar_revision();">Terminar revisión</button></textarea>
		<button type="button" class="btn btn-warning" onclick="publicar();">Publicar revisión</button></textarea>


		<br><br>
	</div>


</body>

</html>
