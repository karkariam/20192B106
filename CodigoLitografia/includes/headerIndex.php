<!DOCTYPE html>
<html lang="es">
session_start();

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CodigoLitografia/css/bootstrap.css">
    <link rel="stylesheet" href="CodigoLitografia/css/inicio.css">
    <script src="CodigoLitografia/js/contador.js"></script>
    <title>Litografia Angarita</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-info navbar-expand-xl navbar fixed-top">
            <!-- imagen de la empresa con link a la pagina de inicio -->
            <a class="navbar-brand text-white" href="index.php">
                <img src="https://drive.google.com/uc?export=view&id=1t1AHihGh_O0IiDmHaJF1_AyNwbC48tj7" width="60" height="30" class="d-inline-block align-top" alt="Angarita Ardila Impresores">
                <b>Litografia Angarita</b>
            </a>
            <!-- boton de menu responsive -->
            <button type="button" class="btn btn-dark navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <div class="navbar-nav mr-auto ml-auto text-center">
                    <a class="nav-link active" href="index.php">Inicio</a>
                    <!-- Submenu en collapse -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos y Servicios</a>
                        <div class="dropdown-menu text-dark">
                            <a class="dropdown-item" href="CodigoLitografia/templates/comercial.php">Papeleria comercial</a>
                            <a class="dropdown-item" href="CodigoLitografia/templates/miscelanea.php">Miscelanea</a>
                        </div>
                    </div>
                    <a class="nav-link text-white" href="CodigoLitografia/templates/acerca_de.php">Nosotros</a>
                    <a class="nav-link text-white" href="CodigoLitografia/templates/promociones.php">Promociones</a>
                    <a class="nav-link text-white" href="CodigoLitografia/templates/ubicacion.php">Ubicacion</a>
                    <a class="nav-link text-white" href="CodigoLitografia/templates/contactenos.php">Contacto</a>
                    <a class="nav-link text-white" href="CodigoLitografia/templates/preguntas.php">Preguntas Frecuentes</a>
                    <a class="nav-link text-white" href="CodigoLitografia/templates/ingresar.php"><b>ingresar</b></a>
                    <a class="nav-link text-white" href="CodigoLitografia/includes/logout.php"><b>Log-out</b></a>
                </div>
            </div>
        </nav>
        <!-- Cookies -->
        <?php
        if (isset($_COOKIE['contador'])) {
            // cookie para tener un conteo de vistas
            setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
            $mensaje = 'Número de visitas: ' . $_COOKIE['contador'];
        } else {
            // Caduca en un año 
            setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
            $mensaje = 'Bienvenido a nuestra página web';
        }
        ?>
    </header>