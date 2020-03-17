
<?php /* conexión de la base de datos a phpmyadmin*/
$server   = "localhost";
$username = "root";
$password = "";
$database = "login";


$mysqli = new mysqli($server, $username, $password, $database);


if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
    exit();
	
}

/*
	$mysqli=new mysqli("localhost","root","password","login"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	*/
?>