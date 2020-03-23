<?php include('../includes/header.php');   ?>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">
<script src="jquery-3.2.1.min.js"></script>

<!-- Encuesta sobre uso de internet -->
<br>
<div class="contenedor">
    <form id="frmajax" class="form" action="../includes/insertar.php" class="form" method="POST">
        <div class="form-header">
            <h1 class="form-title">E<span>ncuesta uso de internet.</span></h1>
        </div>

        <tr>
            <td>
                <label for="Nombre" class="form-label">Nombre:</label>
            </td>
            <td> <input class="form-input" value="" placeholder='Escriba su nombre' name="nombre" id="nombre" type='text' required> </td>
        </tr>

        <tr>
            <td> <label for="Sexo" class="form-label">Sexo</label></td>
            <td>
        <tr>
            <input name='sexo' value='Mas' type='radio'> Masculino <br>
            <input name='sexo' value='Fem' type='radio'> Femenino <br>
            <input name='sexo' value='otro' type='radio'> Otro <br>
        </tr>
        </td>
        </tr>
        <label for='correo' class="form-label">Correo Electronico:</label>
        <input type='email' name='correo' id="Correo" class="form-input" placeholder='Escriba su correo' required>
        <tr>
            <td> <label class="form-label" required>¿Con que frecuencia usas el internet a la
                    semana?</label></td>
            <td>
                <input name="frecuencia" value="1 día a la semana" type='radio'>1 día a la semana<br>
                <input name="frecuencia" value="2 día a la semana" type='radio'>2 días a la semana<br>
                <input name="frecuencia" value="3 día a la semana" type='radio'>3 días a la semana<br>
                <input name="frecuencia" value="4 día a la semana" type='radio'>4 días a la semana<br>
                <input name="frecuencia" value="5 día a la semana" type='radio'>5 día a la semana<br>
                <input name="frecuencia" value="6 día a la semana" type='radio'>6 día a la semana<br>
                <input name="frecuencia" value="Todos los dias de la semana" type='radio'>Todos los días<br>

            </td>
        </tr>
        <tr>
            <td>
                <label class="form-label" id="Lugar">¿Cuál es el lugar habitual del Uso del internet?</label></td>
            <td>
                <input id="lugar" name="lugar" value='casa' type='radio'>casa<br>
                <input id="lugar" name="lugar" value='ciber-café' type='radio'>ciber-café<br>
                <input id="lugar" name="lugar" value='universidad' type='radio'>universidad<br>
                <input id="lugar" name="lugar" value='oficina/trabajo' type='radio'>oficina/trabajo<br>
                <input id="lugar" name="lugar" value='Otro' type='radio'>Otro<br>
                <label class="form-label">especifique</label>
                <input type='text' name="lugar2" id="Otro" class="form-input">

            </td>
        </tr>

        <tr>
            <td> <label class="form-label" id="Compra" required>¿Alguna vez has hecho compra por internet?</label>
            </td>
            <td>
                <input id="compras" name="compras" value='si' type='radio'> Si<br>
                <input id="compras" name="compras" value='no' type='radio'> No<br>
            </td>
        </tr>
        <br>
        <tr>
            <td> <label class="form-label" required> ¿Que tipo de computadora usas?</label></td>
            <td>
                <input name="tipo" id="tipo" value='laptop' type='radio'>Laptop<br>
                <input name="tipo" id="tipo" value='desktop' type='radio'>Desktop<br>
                <input name="tipo" id="tipo" value='mini laptop' type='radio'>Mini Laptop<br>

            </td>
        </tr>
        <br>
        <tr>
            <td> <label class="form-label" required>¿Que hora prefieres para usar el internet?</label>
            </td>
            <td>
                <input name="hora" id="hora" value='mañana' type='radio'>Durante la mañana<br>
                <input name="hora" id="hora" value='tarde' type='radio'>Durante la tarde<br>
                <input name="hora" id="hora" value='noche' type='radio'>Durante la noche<br>
            </td>
        </tr>
        <br>
        <tr>
            <td> <label class="form-label" required>¿Consideras que tu le das un buen uso al
                    internet?</label></td>
            <td>
                <input name="uso" id="uso" value='si' type='radio'>Si<br>
                <input name="uso" id="uso" value='no' type='radio'>No<br>
                <input name="uso" id="uso" value='No estoy seguro' type='radio'>No estoy seguro<br>

            </td>
        </tr>
        <br>
        <tr>
            <td> <label class="form-label" id="Hacer" required>¿Cual es el uso que mas le das al internet?</label>
            </td>
            <td>
                <input name="hacer" id="hacer" value='Chat' type='checkbox'>Chat<br>
                <input name="hacer" id="hacer" value='Videos' type='checkbox'>Videos<br>
                <input name="hacer" id="hacer" value='Musica' type='checkbox'>Musica<br>
                <input name="hacer" id="hacer" value='Deportes' type='checkbox'>Deportes<br>
                <input name="hacer" id="hacer" value='Ocio' type='checkbox'>Ocio<br>
                <input name="hacer" id="hacer" value='Juegos' type='checkbox'>Juegos<br>
                <input name="hacer" id="hacer" value='Estudio' type='checkbox'>Estudio<br>
                <input name="hacer" value='Otro' id=" hacer2" type='checkbox'>Otro<br>
                <label class="form-label">especifique</label>
                <input type='text' name="hacer2" id="Otro" class="form-input">
            </td>
        </tr>
        <br>
        <br>
        <tr>
            <td>
                <label class="form-label" id="Fecha" required>¿A que edad empezo a navegar en la web?</label></td>
            </datepicker>
            <input type='date' name='fecha' id="fecha" step='1' min='1980-01-01' max='2020-12-31' value='<?php echo date('Y-m-d'); ?>'>
        </tr>
        <br><br>
        <input type="submit" class="btn-submit" value="Guardar datos">
    </form>
</div>
<br><br><br><br><br>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnguardar').click(function() {
            var datos = $('#frmajax').serialize();
            $.ajax({
                type: "POST",
                url: "insertar.php",
                data: datos,
                success: function(r) {
                    if (r == 1) {
                        alert("agregado con exito");
                    } else {
                        alert("Fallo el server");
                    }
                }
            });

            return false;
        });
    });
</script>





<?php include('../includes/footer.php'); ?>