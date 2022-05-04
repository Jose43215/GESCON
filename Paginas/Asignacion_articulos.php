<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Css/Articulos.css">
    <title>Envío de articulos a revisores</title>
</head>

<body>

    <div class="barra">
        <input type="button" class="boton" value="Active">
        <div class="prin">Asignación de artículos</div>
    </div>
    
	<div class="art">Articulos</div>
    <div class="opcns">
		<select name="doc" id="doc">
			<option disabled selected>Seleccione el articulo a asignar</option>
			<option value="art_1">Articulo 1</option>
			<option value="art_2">Articulo 2</option>
			<option value="art_3">Articulo 3</option>
			<option value="art_4">Articulo 4</option>
		</select>
	</div>

	<div class="rev">Revisores</div>
    <div class="opcns2">
		<select name="art" id="art">
			<option disabled selected>Seleccione el revisor &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
			<option value="rev_1">Revisor 1</option>
			<option value="rev_2">Revisor 2</option>
			<option value="rev_3">Revisor 3</option>
			<option value="rev_4">Revisor 4</option>
		</select>
	</div>

	<form class="ficha_revisor">
		<fieldset><br>
			<legend id="titulo">Información del Revisor</legend>
			<div class="texto">Nombre del Revisor: </div>
			<input type="text" name="nombre" placeholder="Nombre del revisor" disabled><br><br>
			<div class="texto">Articulos asignados: </div>
			<input type="text" name="articulos" placeholder="Cantidad de articulos" disabled><br><br>
		</fieldset>
	</form>
	<input type="button" class="boton" value="Asignar articulo"><br><br>
</body>

</html>
