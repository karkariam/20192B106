<?php include('../includes/header.php');   ?>

<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">
<br><br><br>

<!-- formulario hoja de vida -->
<div class="contenedor">
	<form id="formulario" action="" class="form">
		<div class="form-header">
			<h1 class="form-title">H<span>oja de vida</span></h1>
		</div>
		<label for="nombre" class="form-label">Nombre:</label>
		<input type="text" id="nombre" class="form-input" class="required" placeholder="Escriba su nombre" required>

		<label for="apellido" class="form-label">Apellido:</label>
		<input type="text" id="apellido" class="form-input" placeholder="Escriba su apellido" required>

		<label for="telefono" class="form-label">Telefono:</label>
		<input type="text" id="telefono" class="form-input" placeholder="Escriba su telefono" required>

		<label for="codigo" class="form-label">Codigo:</label>
		<input type="codigo" id="codigo" class="form-input" placeholder="Escriba su codigo" required>

		<label for="correo" class="form-label">Correo Electronico:</label>
		<input type="email" id="correo" class="form-input" placeholder=" Escriba su correo" required>

		<label for="contraseña" class="form-label">Contraseña:</label>
		<input type="password" id="contraseña" class="form-input" value="" placeholder="Escriba su contraseña" required>

		<label class="form-label">Confirmar contraseña:</label>
		<input type="password" id="confirmar" class="form-input" value="" placeholder="Confirme su contraseña" required>

		<input type="submit" class="btn-submit" value="Enviar">
	</form>
</div>

<?php include("../includes/footer.php");        ?>