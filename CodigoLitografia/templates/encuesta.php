<?php include('../includes/header.php');   ?>
<br>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">
<script src="jquery-3.2.1.min.js"></script>

<!-- Encuesta sobre uso de internet -->
<br>
<div class="contenedor">

    <form id="frmajax" class="form" action="../includes/insertar.php" method="POST">
        <div class="form-header">
            <h1 class="form-header">E<span>ncuesta uso de internet.</span></h1>
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
            <td> <label class="form-label" required>1.¿Con que frecuencia usas el internet a la
                    semana?</label></td>
            <td>
                <select name='Vive' class="form-input">
                    <option selected='selected'></option>
                    <option id="frecuencia" name="frecuencia" value="1 día a la semana">1 día a la semana</option>
                    <option id="frecuencia" name="frecuencia" value="2 día a la semana">2 días a la semana</option>
                    <option id="frecuencia" name="frecuencia" value="3 día a la semana">3 días a la semana</option>
                    <option id="frecuencia" name="frecuencia" value="4 día a la semana">4 días a la semana</option>
                    <option id="frecuencia" name="frecuencia" value="5 día a la semana">Todos los días</option>
                    <option>otro</option>
                </select>
                <label class="form-label">expecifique</label>
                <input type='text' name="frecuencia" id="Otro" class="form-input">
            </td>
        </tr>

        <tr>
            <td> <label class="form-label" id="Lugar" required>2.¿Cuál es el lugar habitual del Uso del
                    internet?</label></td>
            <td>
                <select name='Vive' class="form-input">
                    <option selected='selected'></option>
                    <option id="lugar" name="lugar">casa</option>
                    <option id="lugar" name="lugar">ciber-café</option>
                    <option id="lugar" name="lugar">universidad</option>
                    <option id="lugar" name="lugar">oficina/trabajo</option>
                    <option>otro</option>
                </select>
                <label class="form-label">expecifique</label>
                <input type='text' name="lugar" id="Otro" class="form-input">

            </td>
        </tr>

        <tr>
            <td> <label class="form-label" id="Compra" required>3.¿Alguna vez has hecho compra por internet?</label>
            </td>
            <td>
                <input id="compras" name="compras" value='si' type='radio'> Si<br>
                <input id="compras" name="compras" value='no' type='radio'> No<br>
            </td>
        </tr>
        <br>
        <tr>
            <td> <label class="form-label" required>4. ¿Que tipo de computadora usas?</label></td>
            <td>
                <input name="tipo" id="tipo" value='laptop' type='checkbox'>Laptop<br>
                <input name="tipo" id="tipo" value='desktop' type='checkbox'>Desktop<br>
                <input name="tipo" id="tipo" value='mini laptop' type='checkbox'>Mini Laptop<br>

            </td>
        </tr>
        <br>
        <tr>
            <td> <label class="form-label" required>5.¿Que hora prefieres para usar el internet?</label>
            </td>
            <td>
                <input name="hora" id="hora" value='mañana' type='checkbox'>Durante la mañana<br>
                <input name="hora" id="hora" value='no' type='checkbox'>Durante la tarde<br>
                <input name="hora" id="hora" value='no' type='checkbox'>Durante la noche<br>
            </td>
        </tr>
        <br>
        <tr>
            <td> <label class="form-label" required>6.¿Consideras que tu le das un buen uso al
                    internet?</label></td>
            <td>
                <input name="uso" id="uso" value='mañana' type='radio'>Si<br>
                <input name="uso" id="uso" value='no' type='radio'>No<br>
                <input name="uso" id="uso" value='no' type='radio'>No estoy seguro<br>

            </td>
        </tr>
        <br>
        <tr>
            <td> <label class="form-label" id="Hacer" required>7.¿Cual es el uso que mas le das al internet?</label>
            </td>
            <td>
                <input name="hacer" id="hacer" type='checkbox'>Chat<br>
                <input name="hacer" id="hacer" value='no' type='checkbox'>Videos<br>
                <input name="hacer" id="hacer" value='no' type='checkbox'>Musica<br>
                <input name="hacer" id="hacer" value='no' type='checkbox'>Deportes<br>
                <input name="hacer" id="hacer" value='no' type='checkbox'>Ocio<br>
                <input name="hacer" id="hacer" value='no' type='checkbox'>Juegos<br>
                <input name="hacer" id="hacer" value='no' type='checkbox'>Estudio<br>
                <label>otro</label>
                <br>
                <input type='text'>
            </td>
        </tr>
        <br>
        <br>
        <tr>
            <td>
                <label class="form-label" id="Fecha" required>8.¿A que edad empezo a navegar en la web?</label></td>
            </datepicker>
            <input type='date' name='fecha' id="fecha" step='1' min='1980-01-01' max='2020-12-31' value='<?php echo date('Y-m-d'); ?>'>
        </tr>
        <br><br>
        <button id="btnguardar">Guardar datos</button>

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