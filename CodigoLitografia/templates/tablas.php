<?php include('../includes/header.php');
session_start();  ?>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/tablas.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

<?php
include_once '../includes/conexion.php';

//solo el admin puede ingresar al crud
if (isset($_SESSION['admin'])) {
    echo 'Bienvenido! ' . $_SESSION['admin'];
} else {
    header('location: ../templates/ingresar.php');
}

$sql_leer = "SELECT * FROM Productos";
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();
//var_dump($resultado);

//agregar
if ($_POST) {
    $Idproducto = $_POST['id'];
    $Cantidadp = $_POST['Cantidadp'];
    $Descripcionp = $_POST['Descripcionp'];
    $Costo = $_POST['Costo'];
    $Venta = $_POST['Venta'];
    $Fk_idprove_proveedores = $_POST['Fk_idprove_proveedores'];
    //ingresa en la tabla
    $sql_agregar = "INSERT INTO Productos (Idprod,Cantidadp,Descripcionp,Costo,Venta,Fk_idprove_proveedores) VALUES (?,?,?,?,?,?)";
    //agrega a la tabla
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($Idproducto, $Cantidadp, $Descripcionp, $Costo, $Venta, $Fk_idprove_proveedores));
    echo "<br><br><br><br>conxxx";
    $sentencia_agregar = null;
    $pdo = null;
    //recarga la tabla
    header('location:/20192B106/CodigoLitografia/templates/tablas.php');
}


?>
<br><br><br>
<div class="row">
    <div class="col-lg-7 ">
        <table>
            <thead class="thead-primary">
                <tr>
                    <th> Id producto </th>
                    <th> Cantidad </th>
                    <th> Descripcion </th>
                    <th> Costo </th>
                    <th> Venta </th>
                    <th> Fk proveedores </th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($resultado as $dato) : // crear un bucle for each para imprimir datos 
                ?> <tr>

                        <th> <?php echo $dato['Idprod'] ?></th>

                        <th><?php echo $dato['Cantidadp'] ?></th>

                        <th><?php echo $dato['Descripcionp'] ?></th>

                        <th><?php echo $dato['Costo'] ?></th>

                        <th><?php echo $dato['Venta'] ?></th>

                        <th><?php echo $dato['Fk_idprove_proveedores'] ?>
                        </th>
                    </tr>
                <?php endforeach  // aqui cierra el bucle 
                ?>

            </tbody>
        </table>
    </div>
    <div class="col-lg-5 ">
        <form action="tablas.php" method="POST">
            <h2> Agregar productos:</h2>
            <input type="text" name="id" value="Id producto" class="form-control">
            <input type="text" name="Cantidadp" value="Numero unidades" class="form-control ">
            <input type="text" name="Descripcionp" value="Descripcion" class="form-control ">
            <input type="text" name="Costo" value="Costo" class="form-control ">
            <input type="text" name="Venta" value="Precio Venta" class="form-control ">
            <input type="text" name="Fk_idprove_proveedores" value="Fk de proveedor" class="form-control ">
            <button class="btn btn-primary mt-3"> Agregar </button>
        </form>
        <form action="editartb.php">
            <button class="btn btn-primary mt-3"> Ir a editar </button>
        </form>

        <form action="borrartb.php">
            <button class="btn btn-primary mt-3"> Ir a borrar </button>
        </form>
    </div>
</div>
<?php

//cerramos conexión base de datos y sentencia
$pdo = null;
$gsent = null;

?>
<br><br>
<?php include("../includes/footer.php");        ?>