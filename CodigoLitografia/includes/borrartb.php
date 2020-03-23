<?php
include_once 'conexion.php';

$Idproducto = $_POST['id'];


//borrar en la tabla
$sql_eliminar = 'DELETE FROM Productos WHERE Idprod=?';
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($Idproducto));

//cerramos conexión base de datos y sentencia
$pdo = null;
$sentencia_eliminar = null;
