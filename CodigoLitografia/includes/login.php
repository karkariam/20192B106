<?php
include_once 'conexion.php';

session_start();
// No permitir usar un ID de sesión demasiado antiguo
if (!empty($_SESSION['deleted_time']) && $_SESSION['deleted_time'] < time() - 180) {
    session_destroy();
    session_start();
}

//recoje los datos de usuario
$usuario_login = $_POST['email'];
$contrasena_login = $_POST['contraseña'];

//VERIFICAR SI USUARIO EXISTE
$sql = "SELECT Email, Contraseña FROM Clientes WHERE Email = ?";
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

//saca el nombre de usuario registrado
$sql = "SELECT Nombre FROM Clientes WHERE Email = ?";
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$usuario = $sentencia->fetch();

if (!$resultado) {
    echo "No existe usuario";
} else { //las contraseñas cifradas son iguales hash
    if (password_verify($contrasena_login, $resultado['Contraseña'])) {
        echo "El usuario ah sido verificado";
        $_SESSION['usuario'] = $usuario;
        header('location: ../templates/matriz.php');
    } else { //contraseña de los ya registrados
        if ($resultado['Contraseña'] === $contrasena_login) {
            echo "El usuario ah sido verificado";
            $_SESSION['usuario'] = $usuario;
            header('location: ../../index.php');
        } else {
            echo "Contraseña es incorrecta";
        }
        echo "Contraseña es incorrecta";
    }
}
