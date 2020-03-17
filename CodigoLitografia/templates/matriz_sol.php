<?php include('../includes/header.php');   ?>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">

<br><BR></BR>
<div class="container" style="text-align:center;">

    <?php
    $m1 = array();
    $m2 = array();
    foreach ($_POST as $key => $valor) {
        /* copiado de las matrices del formulario */
        if (substr($key, 0, 1) == "1") {
            $m1[(int) substr($key, 2, 3)][(int) substr($key, 4, 5)] = $valor;
        } elseif (substr($key, 0, 1) == "2") {
            $m2[(int) substr($key, 2, 3)][(int) substr($key, 4, 5)] = $valor;
        }
    }
    /* operacion de las dos matrices para hacer una nueva */
    $m3 = array();
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $m3[$i][$j] = 0;
            for ($k = 0; $k < 3; $k++) {
                $m3[$i][$j] += $m1[$i][$k] * $m2[$k][$j];
            }
        }
    }


    echo "<table style='text-align:center; HEIGHT:100% ;WIDTH:100%;'>";
    echo " <tr>  <h2>Resultado: </h2>  </tr>  ";
    //imprimir la matriz numero 3
    for ($i = 0; $i < 3; $i++) {
        echo "<tr >";
        for ($j = 0; $j < 3; $j++) {
            $a = $m3[$i][$j];
            echo "<td>$a</td>";
        }
        echo "</tr>";
    }
    echo "<br></table>";
    ?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include("../includes/footer.php");        ?>