<?php
include_once 'conexion.php';

session_start();
//recoje los datos de usuario
$usuario_login = $_POST['email'];
$contrasena_login = $_POST['contraseña'];

//VERIFICAR SI USUARIO EXISTE
$sql = "SELECT Email, Contraseña FROM Admins WHERE Email = ?";
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

//saca el nombre de usuario registrado
$sql = "SELECT Nombre FROM Admins WHERE Email = ?";
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$usuario = $sentencia->fetch();

if (!$resultado) {
    echo "No existe usuario";
} else { //las contraseñas cifradas son iguales
    if (password_verify($contrasena_login, $resultado['Contraseña'])) {
        echo "El usuario ah sido verificado";
        $_SESSION['admin'] = $usuario_login;
        header('location: ../../index.php');
    } else {
        //contraseñas insertadas desde la base
        if ($resultado['Contraseña'] === $contrasena_login) {
            echo "El usuario ah sido verificado";
            $_SESSION['admin'] = $usuario_login;
            header('location: ../../index.php');
        } else {
            echo "Contraseña incorrecta";
        }
        echo "Contraseña incorrecta";
    }
}
