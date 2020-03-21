<?php include "CodigoLitografia/includes/headerIndex.php"; ?>
<br><br>

<article>
    <div class="ImagenIndex">
        <h1 class="TituloIndex"><br>
            <b>ANGARITA ARDILA IMPRESIONES</b>
            <br><br>
            <b>TU MEJOR OPCION</b>
            <br><br>
        </h1>
        <a href="CodigoLitografia/templates/contactenos.php" class="btn btn-info">Cotiza Ahora</a>
    </div>
</article>

<hr>
<!--Muestra la cookie1 con el nombre y contador de vistas-->
<h4>
    <div class="container">
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close"></span></a>
            <p id="cookie1"><span class="fa fa-bookmark"></span> Bienvenido a ANGARITA ARDILA IMPRESIONES</p>
        </div>
    </div>
</h4>

<!-- cookie con el contador de vistas y el nombre -->
<script type="text/javascript">
    var impresion = "Hola <b>" + Who() + "</b>. Has visitado la página " + Count() + " veces.  La última visita fue: " + When() + ".";
    document.getElementById("cookie1").innerHTML = impresion;
</script>

<?php include "CodigoLitografia/includes/base.php"; ?>
<?php include "CodigoLitografia/includes/footerIndex.php"; ?>