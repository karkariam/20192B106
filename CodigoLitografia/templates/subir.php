<?php include('../includes/header.php');   ?>
<?php
session_start();
if (isset($_SESSION['usuario'])) {
} else {
  if (isset($_SESSION['admin'])) {
    echo 'Bienvenido! ' . $_SESSION['admin'];
  } else {
    header('location: ../templates/ingresar.php');
  }
}
?>

<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">
<br><br><br>

<div class="container">
  <div class="panel panel-primary">
    <div class="panel-body">

      <form name="form1" id="form1" method="post" action="guardar.php" enctype="multipart/form-data">

        <h3 class="text-center">Cargar multiples archivos.</h3>

        <div class="form-group">
          <div class="col-sm-10">
            <input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="" accept="image/*">
          </div>

          <center><br><button type="submit" class="btn btn-primary">Cargar</button><br>
            <center>
        </div>

      </form>



    </div>
  </div>
</div>

<div>
  <h3 class="text-center">Descargara archivos de importancia.<h3>

      <form method="post" action="validar1.php" enctype="multipart/form-data">
        <h4 class="text-center">Nuestro catalogo:</h4>
        <center><button type="submit" class="btn btn-primary">Descargar</button>
          <center>

      </form>

      <form method="post" action="validar2.php" enctype="multipart/form-data">
        <h4 class="text-center">Ofertas disponibles:</h4>
        <center><button type="submit" class="btn btn-primary">Descargar</button>
          <center>

      </form>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php include("../includes/footer.php");        ?>