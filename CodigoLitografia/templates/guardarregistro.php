
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
		$nombre = $_POST['nombre'];	
		$usuario = $_POST['usuario'];	
		$password = $_POST['password'];
		$con_password = $_POST['con_password'];	
		$email = $_POST['email'];
		$contenido="
		Nombre:=$nombre
		Usuario:=$usuario
		Contraseña:=$password
		Email:=$email
		";
		$archivo=fopen("recibido/$email.txt","w");
		fwrite($archivo,$contenido);
	?>
</head>
<body>
	Formulario enviado
</body>
</html>