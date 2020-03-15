<?php include('../includes/header.php');   ?>
<br><BR></BR>

<div class="container">
    <div class="row">
        <div>
            <h3>Multiplicacion de matrices.</h3>
            <p>
                Por favor ingrese los datos en la matriz 1:
            </p>
        </div>

    </div>

    <form action="matriz_sol.php" method="post" enctype="multipart/form-data">

        <fieldset id="matrix1">
            <table align="center" >
                <tr>

                    <td><input type="text" name="1-0-0" required /></td>
                    <td><input type="text" name="1-0-1" required /></td>
                    <td><input type="text" name="1-0-2" required /></td>

                </tr>
                <tr>

                    <td><input type="text" name="1-1-0" required /></td>
                    <td><input type="text" name="1-1-1" required /></td>
                    <td><input type="text" name="1-1-2" required /></td>

                </tr>
                <tr>

                    <td><input type="text" name="1-2-0" required /></td>
                    <td><input type="text" name="1-2-1" required /></td>
                    <td><input type="text" name="1-2-2" required /></td>

                </tr>

            </table>
        </fieldset>
        <hr>
        <p>
            por favor ingrese los datos en la matriz 2:
        </p>

        <fieldset id="matrix2">
            <table align="center" required>
                <tr>

                    <td><input type="text" name="2-0-0" required /></td>
                    <td><input type="text" name="2-0-1" required /></td>
                    <td><input type="text" name="2-0-2" required /></td>

                </tr>
                <tr>

                    <td><input type="text" name="2-1-0" required /></td>
                    <td><input type="text" name="2-1-1" required /></td>
                    <td><input type="text" name="2-1-2" required /></td>

                </tr>
                <tr>

                    <td><input type="text" name="2-2-0" required /></td>
                    <td><input type="text" name="2-2-1" required /></td>
                    <td><input type="text" name="2-2-2" required /></td>

                </tr>

            </table>
        </fieldset>

        <input type="submit" name="Enviar" value="Operar"/>
    </form>

</div>
<br><br><br><br><br><br><br><br><br><br>
<?php include("../includes/footer.php");        ?>