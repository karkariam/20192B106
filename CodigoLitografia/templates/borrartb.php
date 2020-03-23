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
        <form action="../includes/borrartb.php" method="POST">
            <h2> borrar productos:</h2>
            <input type="text" name="id" value="Id producto" class="form-control">
            <button class="btn btn-primary mt-3"> borrar </button>
        </form>
        <form action="tablas.php">
            <button class="btn btn-primary mt-3"> Ir a agregar </button>
        </form>

        <form action="editartb.php">
            <button class="btn btn-primary mt-3"> Ir a editar </button>
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