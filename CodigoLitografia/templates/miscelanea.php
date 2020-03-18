<?php include('../includes/header.php');   ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/acordeon.css">
<br><br>

<!-- Contenedores de acordeon -->
<div id="container-main">
    <h1>MISCELANEA</h1>

    <button class="accordion">Escolar</button>
    <div class="panel">
        <img src="../../DatosLitografia/print9.jpg" alt="3.png" style="width:30%;">
        <p>Aquí encontrarás útiles, herramientas y productos que te harán todo más fácil a la hora de estudiar como son:
            Libretas,cuadernos,marcadores,colores,lapiceros,colores,
            correctores,carpetas,vinilos etc.
        </p>
    </div>

    <button class="accordion">Oficiona</button>
    <div class="panel">
        <img src="../../DatosLitografia/print10.jpg" alt="3.png" style="width:50%;">
        <p>Para mantener la operación de una empresa, es necesario mantener todos los elementos para funcionar. Por eso, te queremos compartir una lista de artículos de papeleria para oficina.
        </p>
    </div>


    <button class="accordion">Belleza</button>
    <div class="panel">
        <img src="../../DatosLitografia/print11.jpg" alt="3.png" style="width:50%;">
        <p>franmich es una empreza que trabaja para ti ofreciéndote los mejores productos de la mejor calidad nuestra empreza maneja variedad múltiple de cosméticos hechos especialmente para ti.
        </p>
    </div>


    <button class="accordion">Piñatería</button>
    <div class="panel">
        <img src="../../DatosLitografia/print12.jpg" alt="3.png" style="width:30%;" style="height:30%;">
        <p>En Angarita Ardila Impresores encuentras los productos de piñatería, artículos para fiestas, globos y todo lo que necesitas para tus celebraciones.
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

        var contenido = $(this).next(".accordion-content");

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