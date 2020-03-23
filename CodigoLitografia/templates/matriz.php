<?php include('../includes/header.php');   ?>
<?php
session_start();
if (isset($_SESSION['usuario'])) {
} else {
    if (isset($_SESSION['admin'])) {
        echo 'Bienvenido! ' . $_SESSION['admin'];
    } else {
        header('location: ../templates/ingresar.php');
    }
}

?>

<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">

<br><BR></BR>
<div class="container" style="text-align:center;">
    <h3>Multiplicacion de matrices.</h3>
    <br>
    <?php
    // Creamos la tabla 1
    //$matriz1[3][3];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $matriz1[$i][$j] = 0;
            for ($k = 0; $k < 3; $k++) {
                $matriz1[$i][$j] = rand(1, 100); // Creamos lel valor aleatoreo
            }
        }
    }

    echo "<table style='text-align:center;'>";
    echo " <tr>  <h2>Matriz 1. </h2>  </tr>  ";
    //imprimir la matriz numero 1
    for ($i = 0; $i < 3; $i++) {
        echo "<tr >";
        for ($j = 0; $j < 3; $j++) {
            $a = $matriz1[$i][$j];
            echo "<td>$a</td>";
        }
        echo "</tr>";
    }
    echo "<br></table>";

    // Creamos la tabla 2
    //$matriz2[3][3];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $matriz2[$i][$j] = 0;
            for ($k = 0; $k < 3; $k++) {
                $matriz2[$i][$j] = rand(1, 100); // Creamos lel valor aleatoreo
            }
        }
    }

    echo "<table style='text-align:center;'>";
    echo " <tr>  <h2>Matriz 2. </h2>  </tr>  ";
    //imprimir la matriz numero 2
    for ($i = 0; $i < 3; $i++) {
        echo "<tr >";
        for ($j = 0; $j < 3; $j++) {
            $a = $matriz2[$i][$j];
            echo "<td>$a</td>";
        }
        echo "</tr>";
    }
    echo "<br></table>";

    //operacion de la matriz 3
    //$matriz3[3][3];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $matriz3[$i][$j] = 0;
            for ($k = 0; $k < 3; $k++) {
                $matriz3[$i][$j] = $matriz2[$i][$k] * $matriz1[$k][$j];
            }
        }
    }

    echo "<table style='text-align:center;'>";
    echo " <tr>  <h2>Resultado: </h2>  </tr>  ";
    //imprimir la matriz numero 3
    for ($i = 0; $i < 3; $i++) {
        echo "<tr >";
        for ($j = 0; $j < 3; $j++) {
            $a = $matriz3[$i][$j];
            echo "<td>$a</td>";
        }
        echo "</tr>";
    }
    echo "<br></table>";
    ?>

</div>
<br><br>

<?php include("../includes/footer.php");        ?>