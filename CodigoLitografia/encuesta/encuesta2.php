<?php include('../includes/header.php');   ?>

<br>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">
<script src="jquery-3.2.1.min.js"></script>

<form id="frmajax" method="POST">
	<label>Nombre</label>
	<p></p>
	<input placeholder='Escriba su nombre' type="text" name="nombre" id="nombre">
	<p></p>
	<label>Sexo</label>
	<p></p>
	<input type="text" name="sexo" id="sexo">
	<p></p>
	<label>Correo</label>
	<p></p>
	<input type="text" name="correo" id="correo">
	<p></p>
	<label>Cunatos días por semana utiliza internet</label>
	<p></p>
	<input type="text" name="frecuencia" id="frecuencia">
	<p></p>
	<label>Lugar donde mas utiliza Internet</label>
	<p></p>
	<input type="text" name="lugar" id="lugar">
	<p></p>
	<label>Ha hecho compras por internet</label>
	<p></p>
	<input type="text" name="compras" id="compras">
	<p></p>
	<label>Dispostivo electronico que utilizas para conectarte a internet</label>
	<p></p>
	<input type="text" name="tipo" id="tipo">
	<p></p>
	<label>Cuantas horas duras conectado a internet</label>
	<p></p>
	<input type="text" name="hora" id="hora">
	<p></p>
	<label>Utilizas bien el internet</label>
	<p></p>
	<input type="text" name="uso" id="uso">
	<p></p>
	<label>Que haces la mayoria de tiempo en internet</label>
	<p></p>
	<input type="text" name="hacer" id="hacer">
	<p></p>
	<label>Desde cuando navegas en interner</label>
	<p></p>
	<input type="text" name="fecha" id="fecha">
	<p></p>
	<button id="btnguardar">Guardar datos</button>
</form>

<script type="text/javascript">
	$(document).ready(function() {
		$('#btnguardar').click(function() {
			var datos = $('#frmajax').serialize();
			$.ajax({
				type: "POST",
				url: "insertar.php",
				data: datos,
				success: function(r) {
					if (r == 1) {
						alert("agregado con exito");
					} else {
						alert("Fallo el server");
					}
				}
			});

			return false;
		});
	});
</script>