<?php
$file = file("C:/xampp/htdocs/20192B106/DatosLitografia/Do.png");
$file2 = implode("", $file);
header("Content-Disposition: attachment; filename=Do.png");

echo $file2
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form name="form1" id="form1" method="post" action="descargar.php">
    </div>
    <center><br><button type="submit" class="btn btn-primary">Volver</button></br>
      <center>
        </div>
  </form>
</body>

</html>