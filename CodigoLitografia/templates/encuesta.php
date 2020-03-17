<?php include('../includes/header.php');   ?>
<br>

<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">

<!-- Encuesta sobre uso de internet -->

<body>
    <br><br><br>
    <div class="contenedor">

        <form id="formulario" action="" class="form">
            <div class="form-header">
                <h1 class="form-header">E<span>ncuesta uso de internet.</span></h1>
            </div>

            <tr>
                <td>
                    <label for="nombre" class="form-label">Nombre:</label>
                </td>
                <td> <input class="form-input" placeholder='Escriba su nombre' name='Nombre' type='text' required> </td>
            </tr>

            <tr>
                <td> <label class="form-label">Sexo</label></td>
                <td>
                    <input name='opcion' value='si' type='radio'> Masculino <br>
                    <input name='opcion' value='no' type='radio'> Femenino <br>
                    <input name='opcion' value='no' type='radio'> Otro <br>

                </td>
            </tr>

            <label for='correo' class="form-label">Correo Electronico:</label>
            <input type='email' id='correo' class="form-input" placeholder='Escriba su correo' required>
            <tr>
                <td> <label class="form-label" required>1.¿Con que frecuencia usas el internet a la
                        semana?</label></td>
                <td>
                    <select name='Vive' class="form-input">
                        <option selected='selected'></option>
                        <option>1 día a la semana</option>
                        <option>2 días a la semana</option>
                        <option>3 días a la semana</option>
                        <option>4 días a la semana</option>
                        <option>Todos los días</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td> <label class="form-label" required>2.¿Cuál es el lugar habitual del Uso del
                        internet?</label></td>
                <td>
                    <select name='Vive' class="form-input">
                        <option selected='selected'></option>
                        <option>casa</option>
                        <option>ciber-café</option>
                        <option>universidad</option>
                        <option>oficina/trabajo</option>
                        <option>otro</option>
                    </select>
                    <label class="form-label">expecifique</label>
                    <input type='text' id='otro' class="form-input">

                </td>
            </tr>

            <tr>
                <td> <label class="form-label" required>3.¿Alguna vez has hecho compra por internet?</label>
                </td>
                <td>
                    <input name='opcion' value='si' type='radio'> Si<br>
                    <input name='opcion' value='no' type='radio'>
                    No<br>

                </td>
            </tr>
            <br>

            <tr>
                <td> <label class="form-label" required>4. ¿Que tipo de computadora usas?</label></td>
                <td>
                    <input name='opcion' value='laptop' type='checkbox'>Laptop<br>
                    <input name='opcion' value='desktop' type='checkbox'>Desktop<br>
                    <input name='opcion' value='mini laptop' type='checkbox'>Mini Laptop<br>

                </td>
            </tr>

            <br>

            <tr>
                <td> <label class="form-label" required>5.¿Que hora prefieres para usar el internet?</label>
                </td>
                <td>
                    <input name='opcion' value='mañana' type='checkbox'>Durante la mañana<br>
                    <input name='opcion' value='no' type='checkbox'>Durante la tarde<br>
                    <input name='opcion' value='no' type='checkbox'>Durante la noche<br>

                </td>
            </tr>
            <br>

            <tr>
                <td> <label class="form-label" required>6.¿Consideras que tu le das un buen uso al
                        internet?</label></td>
                <td>
                    <input name='opcion' value='mañana' type='radio'>Si<br>
                    <input name='opcion' value='no' type='radio'>No<br>
                    <input name='opcion' value='no' type='radio'>No estoy seguro<br>

                </td>
            </tr>
            <br>

            <tr>
                <td> <label class="form-label" required>7.¿Cual es el uso que mas le das al internet?</label>
                </td>
                <td>
                    <input name='opcion' value='mañana' type='checkbox'>Chat<br>
                    <input name='opcion' value='no' type='checkbox'>Videos<br>
                    <input name='opcion' value='no' type='checkbox'>Musica<br>
                    <input name='opcion' value='no' type='checkbox'>Deportes<br>
                    <input name='opcion' value='no' type='checkbox'>Ocio<br>
                    <input name='opcion' value='no' type='checkbox'>Juegos<br>
                    <input name='opcion' value='no' type='checkbox'>Estudio<br>
                    <label>otro</label>
                    <br>
                    <input type='text'>

                </td>
            </tr>
            <br>
            <br>

            <tr>
                <td>
                    <label class="form-label" required>8.¿A que edad empezo a navegar en la web?</label></td>
                </datepicker>
                <input type='date' name='tiempo' step='1' min='1980-01-01' max='2020-12-31' value='<?php echo date('Y-m-d'); ?>'>
            </tr>
            <br><br>

            <input type='reset' class="btn-submit" value='Borrar datos'>

            <br><br><br>



        </form>


        <?php include('../includes/footer.php'); ?>