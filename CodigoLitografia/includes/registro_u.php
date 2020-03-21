<?php
// probar conexion a base de datos
$servidor = "localhost";
$nombreusuario = "20192B106";
$password = "H2trKsshRb";
$db = "20192b106";

$conexion = new mysqli($servidor, $nombreusuario, $password);

//recoge los datos del formulario 
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Telefono = $_POST['telefono'];
$Cedula = $_POST['cedula'];
$Email = $_POST['email'];
$Direccion = $_POST['direccion'];
$Contraseña = $_POST['contraseña'];
$Contraseñab = $_POST['contraseñab'];

//verifica si las contraseñas coinciden y continua
if ($Contraseña === $Contraseñab) {
    $sql = "INSERT INTO Clientes Values
('$Cedula','$Nombre','$Apellido','$Contraseña',$Telefono ,'$Email','$Direccion')";
    echo "Datos guardados correctamente";
}else {
    echo"las contraseñas no coinciden";
}
?>