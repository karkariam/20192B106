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
        <p>discípulo de los seguidores superiores del gran Cthulhu, fabricante de bebidas artesanales de alta calidad producidas con trigo y cebada.
        </p>
    </div>
    <button class="accordion">Luz Angarita.</button>
    <div class="panel">
        <img src="../../DatosLitografia/Luz.png " alt="3.png" style="width:50%;">
        <p>Estudiante de 7 semestre de ingeniería de sistemas universidad industrial de Santander.
        </p>
    </div>

</div>
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