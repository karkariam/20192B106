<?php
$file = file("C:/xampp/htdocs/20192B106/DatosLitografia/oferta.jpeg");
$file2 = implode("", $file);
header("Content-Disposition: attachment; filename=oferta.jpeg");

echo $file2;
