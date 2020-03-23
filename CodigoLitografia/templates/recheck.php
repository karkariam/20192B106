<?php include('../includes/header.php');
$mysqli = mysqli_connect("localhost", "20192B106","H2trKsshRb","20192b106"); 
if (!$mysqli){
    include ('../includes/base.php');
    header("Status: 301 Moved Permanently");
    header("Location: ingresar.php");
    exit;
}
else {
    echo "Database exists!";
    header("Status: 301 Moved Permanently");
    header("Location: ingresar.php");
    exit;
}
include("../includes/footer.php");?>