<?php
$file = file("C:/xampp/htdocs/20192B106/DatosLitografia/catalogo_angarita.pdf");
$file2 = implode("", $file);
header("Content-Disposition: attachment; filename=catalogo_angarita.pdf");

echo $file2;
