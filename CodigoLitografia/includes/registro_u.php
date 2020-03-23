<?php
// probar conexion a base de datos
include_once 'conexion.php';

//recoge los datos del formulario 
$Cedula = $_POST['cedula'];
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Contraseña = $_POST['contraseña'];
$Telefono = $_POST['telefono'];
$Usuario_nuevo = $_POST['email'];
$Direccion = $_POST['direccion'];
$Contraseñab = $_POST['contraseñab'];

//VERIFICAR SI USUARIO EXISTE
$sql = "SELECT * FROM Clientes WHERE Email = ?";
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($Usuario_nuevo));
$resultado = $sentencia->fetch();
//var_dump($resultado);
//die();
if (!$resultado) {
} else { //si ewl usuaario ya etsa registrado mata la operacion
    echo "Usuario ya registrado <br>";
    echo 'Clik <a href="/20192B106/CodigoLitografia/templates/registro.php">aqui para registarse.</a>';
    die();
}

//verifica si las contraseñas coinciden y continua
if ($Contraseña === $Contraseñab) {
    $pas_hash = password_hash($Contraseña, PASSWORD_DEFAULT); // contraseña criptografiada 
    //agrega al usuario usando pdo
    $sql_agregar = "INSERT INTO CLientes (Idcliente, Nombre,Apellido, Contraseña, Telefono, Email, Direccion) VALUES(?,?,?,?,?,?,?)";
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($Cedula, $Nombre, $Apellido, $pas_hash, $Telefono, $Usuario_nuevo, $Direccion));
    echo "Datos guardados correctamente";
    echo 'Clik <a href="/20192B106/index.php">aqui para volver a inicio.</a>';
} else {
    echo "las contraseñas no coinciden";
    echo 'Clik <a href="/20192B106/CodigoLitografia/templates/registro.php">aqui para intentar de nuevo.</a>';
}
