<?php include('../includes/header.php');   ?>

<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">
<br><br><br>

<section class="main">
    <!-- Formulario para contacto-->
    <div class="contenedor">
        <form class="form" action="correo.php" method="POST">
            <div class="form-header">
                <h1 class="form-title">C<span>ontactenos</span></h1>
            </div>
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" class="form-input" placeholder="Escriba su nombre">

            <label for="telefono" class="form-label">Telefono:</label>
            <input type="text" id="telefono" class="form-input" placeholder="Escriba su telefono">

            <label for="correo" class="form-label">Correo Electronico:</label>
            <input type="email" id="correo" class="form-input" placeholder="Escriba su correo">

            <label for="mensaje" class="form-label">Mensaje:</label>
            <textarea id="mensaje" class="form-textarea" placeholder="Aqui escriba su mensaje"></textarea>
            <input type="submit" class="btn-submit" value="Enviar">
            <script src='https://www.google.com/recaptcha/api.js'></script>

        </form>
    </div>
</section>

<br><br><br>

<?php include("../includes/footer.php");        ?>