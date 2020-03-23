<?php include('../includes/header.php');   ?>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">


<br><br><br>

<!-- formulario hoja de vida -->
<div class="contenedor">
    <form id="formulario" action="../includes/loginadmin.php" class="form" method="POST">
        <div class="form-header">
            <h1 class="form-title">L<span>og-in Administrador</span></h1>
        </div>
        <label for="correo" class="form-label">Correo Electronico:</label>
        <input type="email" name="email" id="correo" class="form-input" placeholder=" Escriba su correo" required>

        <label for="contraseña" class="form-label">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" class="form-input" value="" placeholder="Escriba su contraseña" required>

        <input type="submit" class="btn-submit" value="Ingresar">
    </form>
</div>
</div>


<br><br><br>
<?php include("../includes/footer.php");        ?>