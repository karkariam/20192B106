<?php include('../includes/header.php');   ?>

<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/acordeon.css">
<br><br><br>

<!-- Contenedores de acordeon con informacion de los progormadores-->
<div id="container-main">
    <h1>Programadores de la pagina web:</h1>

    <button class="accordion">David Ortiz.</button>
    <div class="panel">
        <img src="../../DatosLitografia/Do.png " alt="3.png" style="width:50%;">
        <p>Programador senior, director de proyectos, filantropo, multimullonario, inmune al covid-19.
        </p>
    </div>
    <button class="accordion">Edinson Rodriguez. </button>
    <div class="panel">
        <img src="../../DatosLitografia/Ed.png " alt="3.png" style="width:50%;">
        <p>Programdor jr, master en html5, estilos de ccs.
        </p>
    </div>
    <button class="accordion">Jorge Garcia. </button>
    <div class="panel">
        <img src="../../DatosLitografia/Go.png " alt="3.png" style="width:50%;">
        <p>agreguen una descripcion.
        </p>
    </div>
    <button class="accordion">Luz Angarita.</button>
    <div class="panel">
        <img src="../../DatosLitografia/Luz.png " alt="3.png" style="width:50%;">
        <p>agreguen una descripcion.
        </p>
    </div>
    <br>
    <h1>Para una asistencia personalizada por favor diligencie este formulario:</h1>
</div>

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
    <br>
</section>

<!-- Controles del acordeon -->
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
<!-- Controles del acordeon -->
<script>
    $(".accordion-titulo").click(function() {

        var contenido = $(this).next(".panel");

        if (contenido.css("display") == "none") { //open     
            contenido.slideDown(250);
            $(this).addClass("open");
        } else { //close        
            contenido.slideUp(250);
            $(this).removeClass("open");
        }
    });
</script>

<?php include("../includes/footer.php");        ?>