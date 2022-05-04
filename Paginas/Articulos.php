<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="../Css/Articulos.css">
    <title>Asignación de Artículos</title>

</head>


<body>

    <div class="barra">
        <div class="navbar">Navbar</div>
        <div class="prin">Página principal</div>
        <div class="texto"><input type="text" id="buscar" name="buscar" placeholder="Buscar"></div>
        <div class="boton">Buscar</div>
    </div>
	<div class="opc">Opciones</div>
    <div class="opcns">
		<select name="doc" id="doc">
			<option disabled selected>Seleccione el tipo de documento que desea visualizar</option>
			<option value="asignados">Asignados</option>
			<option value="revisados">Revisados</option>
			<option value="pendientes">Pendientes</option>
			<option value="por revisar">Por revisar</option>
		</select>
	</div>

	<div class="art1">&nbsp&nbsp&nbsp&nbspArticulo 1<button type="button">Descargar</button><div class="dias">Hace 3 días</div></div>
	<div class="art2">&nbsp&nbsp&nbsp&nbspArticulo 2<button type="button">Descargar</button><div class="dias">Hace 3 días</div></div>
	<div class="art3">&nbsp&nbsp&nbsp&nbspArticulo 2<button type="button">Descargar</button><div class="dias">Hace 3 días</div></div>

	<div class="eval">Evaluación</div>

	<div class="contrib">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContribución
		<select name="contr" id="contr">
			<option disabled selected>Seleccione...</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4">5</option>
		</select>
	</div>

	<div class="relev">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRelevancia
		<select name="rlv" id="rlv">
			<option disabled selected>Seleccione...</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4">5</option>
		</select>
	</div>

	<div class="orig">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOriginalidad
		<select name="orignl" id="orignl">
			<option disabled selected>Seleccione...</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4">5</option>
		</select>
	</div>

	<div class="legib">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLegibilidad
		<select name="legbld" id="legbld">
			<option disabled selected>Seleccione...</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4">5</option>
		</select>
	</div>

	<div class="valglob">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspValoración Global
		<select name="vlglb" id="vlglb">
			<option disabled selected>Seleccione...</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4">5</option>
		</select>
	</div>

	<div class="famil">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFamiliaridad del Revisor
		<select name="faml" id="faml">
			<option disabled selected>Opciones</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="4">5</option>
		</select>
	</div>

	<div class="coment">Comentarios</div>
	<div class="comentopc">
		<select name="comsel" id="comsel">
			<option disabled selected>Seleccione...</option>
			<option value="vg">Argumentos de Valoración Global</option>
			<option value="ca">Comentarios del Autor</option>
			<option value="cc">Comentarios al Comité</option>
		</select>
	</div>
	<div class="comentxt"><textarea id="txt" name="txt" maxlength="1000" placeholder="Máximo 1000 caracteres"></textarea></div>
	<div class="guardar"><button type="button">Guardar</button></textarea></div>
	<div class="publicar"><button type="button">Terminar revisión</button></textarea></div>
	<div class="terminar"><button type="button">Publicar revisión</button></textarea></div>
</body>

</html>
