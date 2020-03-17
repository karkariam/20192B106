<?php include('../includes/header.php'); ?>
<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$user_id = $mysqli->real_escape_string($_POST['user_id']);
	$token = $mysqli->real_escape_string($_POST['token']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$con_password = $mysqli->real_escape_string($_POST['con_password']);
	
	if(validaPassword($password, $con_password))
	{
		
		$pass_hash = hashPassword($password);
		
		if(cambiaPassword($pass_hash, $user_id, $token))
		{
			echo "Contrase&ntilde;a Modificada <br> <a href='sesion.php' >Iniciar Sesion</a>";
			} else {
			
			echo "Error al modificar contrase&ntilde;a";
			
		}
		
		} else {
		
		echo 'Las contraseñas no coinciden';
		
	}
	
?><br><br><br><br><br><br><br><br><br><br>
	<?php include("../includes/footer.php"); ?>