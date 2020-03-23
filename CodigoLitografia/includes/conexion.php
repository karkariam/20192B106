<?php

$link = 'mysql:host=localhost;dbname=20192b106';
$usuario = '20192B106';
$pass = 'H2trKsshRb';
$db = "20192b106";

try { // prueba coexion a la base de datos
    $pdo = new PDO($link, $usuario, $pass);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
