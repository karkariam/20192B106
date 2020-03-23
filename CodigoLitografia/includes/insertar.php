<?php
include_once 'conexion.php';
//$servidor = "localhost";
//$nombreusuario = "20192B106";
//$password = "H2trKsshRb";
//$db = "20192b106";

//$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];
$frecuencia = $_POST['frecuencia'];
$lugar = $_POST['lugar'];
$compras = $_POST['compras'];
$tipo = $_POST['tipo'];
$hora = $_POST['hora'];
$uso = $_POST['uso'];
$hacer = $_POST['hacer'];
$fecha = $_POST['fecha'];

$sql_agregar = "INSERT INTO encuesta (nombre,sexo,correo,frecuencia,lugar,compras,tipo,hora,uso,hacer,fecha) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
$sentencia_agregar = $pdo->prepare($sql_agregar);
$sentencia_agregar->execute(array($nombre, $sexo, $correo, $frecuencia, $lugar, $compras, $tipo, $hora, $uso, $hacer, $fecha));

header('location:/20192B106/CodigoLitografia/templates/ingresar.php');


//$sql = "INSERT into encuesta (nombre,sexo,correo,frecuencia,lugar,compras,tipo,hora,uso,hacer,fecha)
			//values ('$nombre','$sexo','$correo','$frecuencia','$lugar','$compras','$tipo','$hora','$uso','$hacer','$fecha')";
//echo mysqli_query($conexion, $sql);
