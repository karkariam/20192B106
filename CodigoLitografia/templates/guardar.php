<?php include('../includes/header.php'); ?>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/estiloformulario.css">
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/acordeon.css">
<br><br><br>
<?php
//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
foreach ($_FILES["archivo"]['tmp_name'] as $key => $tmp_name) {
	//Validamos que el archivo exista
	if ($_FILES["archivo"]["name"][$key]) {
		$filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
		$source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

		$directorio = '../../DatosLitografia/carrusel';

		//Validamos si la ruta de destino existe, en caso de no existir la creamos
		if (!file_exists($directorio)) {
			mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
		}

		$dir = opendir($directorio); //vamos al directorio de destino
		$target_path = $directorio . '/' . $filename; //Indicamos la ruta de destino y el nombre del archivo

		//El primer campo es el origen y el segundo el destino
		if (move_uploaded_file($source, $target_path)) {
			echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
		} else {
			echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
		}
		closedir($dir);
	}
}
?>

<div id="container-main">
	<h1>Las imagenes cargadas apareceran en el carrusel.</h1>
	<?php
	$imagesDirectory = "../../DatosLitografia/carrusel/";
	$n = 0;

	if (is_dir($imagesDirectory)) {
		$opendirectory = opendir($imagesDirectory);

		echo "<div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>";

		while (($image = readdir($opendirectory)) !== false) {
			if (($image == '.') || ($image == '..')) {
				continue;
			}

			$imgFileType = pathinfo($image, PATHINFO_EXTENSION);

			if (($imgFileType == 'jpg') || ($imgFileType == 'jpeg') || ($imgFileType == 'png')) {
				if ($n == 0) {
					echo
						"<div class='carousel-item active'>
                            <img class='d-block w-100' src='../../DatosLitografia/carrusel/" . $image . "' width='300px' height='500px'>    
                        </div>";
				} else {
					echo
						"<div class='carousel-item'>
                            <img class='d-block w-100'  src='../../DatosLitografia/carrusel/" . $image . "' width='300px' height='500px'>    
                        </div>";
				}
			}
			$n = $n + 1;
		}
		echo "</div>";
		echo "  <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
                </a>";
		echo "</div>";

		closedir($opendirectory);
	}
	?>
</div>

<br><br><br><br>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php include("../includes/footer.php"); ?>