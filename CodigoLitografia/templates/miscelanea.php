<?php include('../includes/header.php');   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/miscelanea.css">
</head>

<body>
    <!-- Contenedores de acordeon -->
    <div id="container-main">
        <h1>MISCELANEA</h1>

        <div class="accordion-container">
            <a href="#" class="accordion-titulo">Escolar<span class="toggle-icon"></span></a>
            <div class="accordion-content">
                <img src="https://drive.google.com/uc?export=view&id=1eimBtJ4EObNgDhEaN2FeB5oXmKEx8WKV " alt="3.png" style="width:30%;">
                <p>Aquí encontrarás útiles, herramientas y productos que te harán todo más fácil a la hora de estudiar como son:

                    Libretas,cuadernos,marcadores,colores,lapiceros,colores,
                    correctores,carpetas,vinilos etc.
                </p>
            </div>
        </div>

        <div class="accordion-container">
            <a href="#" class="accordion-titulo"> Oficina <span class="toggle-icon"></span></a>
            <div class="accordion-content">
                <img src="https://drive.google.com/uc?export=view&id=1-lWERnrTav5opqm6VvfUHVe4ubEudEPD" alt="3.png" style="width:50%;">
                <p>Para mantener la operación de una empresa, es necesario mantener todos los elementos para funcionar. Por eso, te queremos compartir una lista de artículos de papeleria para oficina.
                </p>
            </div>
        </div>
    </div>
    <div id="container-main">

        <div class="accordion-container">
            <a href="#" class="accordion-titulo">Belleza<span class="toggle-icon"></span></a>
            <div class="accordion-content">
                <img src="https://drive.google.com/uc?export=view&id=1QY3MlC44yWn0HwdPv0dU5z6XhSTN2rd6 " alt="3.png" style="width:50%;">
                <p>franmich es una empreza que trabaja para ti ofreciéndote los mejores productos de la mejor calidad nuestra empreza maneja variedad múltiple de cosméticos hechos especialmente para ti.
                </p>
            </div>
        </div>

        <div class="accordion-container">
            <a href="#" class="accordion-titulo">Piñatería<span class="toggle-icon"></span></a>
            <div class="accordion-content">
                <img src="https://drive.google.com/uc?export=view&id=1m6dyyKblMHs7bKmiO8lH8fpBzfeCPNnD " alt="3.png" style="width:30%;" style="height:30%;">
                <p>En Angarita Ardila Impresores encuentras los productos de piñatería, artículos para fiestas, globos y todo lo que necesitas para tus celebraciones.
                </p>
            </div>
        </div>
    </div>
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