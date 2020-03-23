<?php include('../includes/header.php');   ?>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">


<br><br><br>
<div class="contenedor">
    <form id="formulario" action="../includes/email.php" class="form" method="POST">
        <div class="form-header">
            <h1 class="form-title">R<span>ecuperar cuenta</span></h1>
        </div>
        <label for="correo" class="form-label">Correo Electronico:</label>
        <input type="email" name="email" id="correo" class="form-input" placeholder=" Escriba su correo" required>

        <input type="submit" class="btn-submit" value="Enviar">
    </form>
    <br><br><br><br><br>
</div>
<?php include("../includes/footer.php");        ?>