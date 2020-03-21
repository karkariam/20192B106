<?php include('../includes/header.php');   ?>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">
<br><br><br>

<!-- formulario Registop usiarios -->
<div class="contenedor">
  <form id="formulario" action="../includes/registro_u.php" class="form" method="POST">
    <div class="form-header">
      <h1 class="form-title">R<span>egistro de usuario</span></h1>
    </div>

    <?php  //validacion de formulario
    if (isset($_POST['nombre'])) {
      $nombre = $_POST['nombre'];
      $password = $_POST['contraseña'];
      $email = $_POST['email'];

      $campos = array();

      if ($nombre == "") {
        array_push($campos, "El campo Nombre no pude estar vacío");
      }

      if ($password == "" || strlen($password) < 6) {
        array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
      }

      if ($email == "" || strpos($email, "@") === false) {
        array_push($campos, "Ingresa un correo electrónico válido.");
      }

      if (count($campos) > 0) {
        echo "<div class='error'>";
        for ($i = 0; $i < count($campos); $i++) {
          echo "<li>" . $campos[$i] . "</i>";
        }
      } else {
        echo "<div class='correcto'>
							Datos correctos";
      }
      echo "</div>";
    }
    ?>
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" name="nombre" id="nombre" class="form-input" class="required" placeholder="Escriba su nombre" required>

    <label for="apellido" class="form-label">Apellido:</label>
    <input type="text" name="apellido" id="apellido" class="form-input" placeholder="Escriba su apellido" required>

    <label for="telefono" class="form-label">Telefono:</label>
    <input type="text" name="telefono" id="telefono" class="form-input" placeholder="Escriba su telefono" required>

    <label for="Cedula" class="form-label">Cedula:</label>
    <input type="Cedula" name="cedula" id="Cedula" class="form-input" placeholder="Escriba su Cedula" required>

    <label for="correo" class="form-label">Correo Electronico:</label>
    <input type="email" name="email" id="correo" class="form-input" placeholder=" Escriba su correo" required>

    <label for="Direccion" class="form-label">Direccion:</label>
    <input type="text" name="direccion" id="Direccion" class="form-input" class="required" placeholder="Escriba su Direccion" required>

    <label for="contraseña" class="form-label">Contraseña:</label>
    <input type="password" name="contraseña" id="contraseña" class="form-input" value="" placeholder="Escriba su contraseña" required>

    <label class="form-label">Confirmar contraseña:</label>
    <input type="password" name="contraseñab" id="confirmar" class="form-input" value="" placeholder="Confirme su contraseña" required>

    <input type="submit" class="btn-submit" value="Enviar">
  </form>
  <?php
  if (isset($_POST['submit'])) {
    require("../includes/registro_u.php");
  }
  ?>
</div>
<br><br><br>
<?php include("../includes/footer.php");        ?>