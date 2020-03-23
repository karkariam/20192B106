<?php
include_once 'conexion.php';

$Idproducto = $_POST['Idprod'];
$Cantidadp = $_POST['Cantidadp'];
$Descripcionp = $_POST['Descripcionp'];
$Costo = $_POST['Costo'];
$Venta = $_POST['Venta'];
//$Fk_idprove_proveedores = $_POST['Fk_idprove_proveedores'];

$db = mysqli_connect("localhost", "20192B106", "H2trKsshRb");
mysqli_select_db($db, '20192b106');
//echo $Idproducto;
//echo '<br>';
//echo $Cantidadp;
//echo '<br>';
//echo $Descripcionp;
//echo $Fk_idprove_proveedores;
//actualiza en la tabla
$sql = "UPDATE Productos SET Cantidadp='$Cantidadp', Descripcionp='$Descripcionp', Costo='$Costo', Venta='$Venta' WHERE Idprod ='$Idproducto'";
$result = mysqli_query($db, $sql);
//$sql_editar = 'UPDATE Productos SET Cantidadp=?,Descripcionp=?,Costo=?,Venta=?,WHERE Idprod=?';
//$sentencia_editar = $pdo->prepare($sql_editar);
//$sentencia_editar->execute(array($Cantidadp, $Descripcionp, $Costo, $Venta, $Idproducto));
echo "<br><br><br><br>conxxx";
//$sentencia_agregar = null;
//$pdo = null;
//recarga la tabla
header('location:/20192B106/CodigoLitografia/templates/editartb.php');

//cerramos conexión base de datos y sentencia
//$pdo = null;
//$sentencia_editar = null;

//header('location:/20192B106/CodigoLitografia/templates/editartb.php');
