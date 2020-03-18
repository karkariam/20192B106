<?php include('../includes/header.php');   ?>
<br><br><br>

<?php // probar conexion a base de datos
$servidor = "localhost";
$nombreusuario = "20192B106";
$password = "H2trKsshRb";

$conexion = new mysqli($servidor, $nombreusuario, $password);

//probar conexion a de usuario
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa...";

//crear base de datos
$sql = "CREATE DATABASE IF NOT EXISTS prueba1";
if ($conexion->query($sql) === true) {
    echo "Base de datos creada correctamente...";
} else {
    die("Error al crear base de datos: " . $conexion->error);
}

?>



<!--
//crear tablas
$sql = "CREATE TABLE IF NOT EXISTS todoTable(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
texto VARCHAR(100) NOT NULL,
completado BOOLEAN NOT NULL,
timestamp TIMESTAMP
)";

if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...";
} else {
    die("Error al crear tabla: " . $conexion->error);
}
-->

<?php include("../includes/footer.php");        ?>