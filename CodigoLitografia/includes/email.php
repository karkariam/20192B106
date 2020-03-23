<?php
//    require '../includes/conexion.php';
   
   $correo=$_POST['email'];
   $contraseña=random_int ( 1000000 , 9999999);
   $mensaje="Para recuperar su cuenta, inicie sesion con la siguiente contraseña: " + $contraseña;
   mail($correo,"Recuperacion de contraseña", $mensaje);

   echo 'mensaje enviado';

?>