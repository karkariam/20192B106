<?php    include('../includes/header.php');   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/20192B106/CodigoLitografia/css/miscelanea.css">
</head>
<body>
   
<div id="container-main">
    <h1>PAPELERIA COMERCIAL</h1>
 
    <div class="accordion-container">
        <a href="#" class="accordion-titulo">Impresos<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <img src="https://drive.google.com/uc?export=view&id=1tfqRBw0c_x_yosklZSuduqd6NWxDhN46 " alt="3.png" style="width:50%;">
            <p>Manejamos impresos hechos a tu medida como son:

			Afiches, Etiquetas, Adhesivo, Facturas, Plegables, Revistas, Tarjetas, Volantes 
</p>
        </div>  
    </div>
    
    <div class="accordion-container">
        <a href="#" class="accordion-titulo"> Impresión Gran Formato <span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <img src="https://drive.google.com/uc?export=view&id=1J2_4dX1kINZ75Q4GpOxFI35NyMSp7a18 " alt="3.png" style="width:50%;">
            <p>Angarita Ardila impresores tiene dentro de su portafolio la posibilidad de hacer trabajos de gran formato como:

			Vinilos adhesivos, Pendones, Pasacalles, Estructura. 
			</p>
        </div>
    </div>
</div>
<div id="container-main">
    
    <div class="accordion-container">
        <a href="#" class="accordion-titulo">Sellos<span class="toggle-icon"></span></a>
         <div class="accordion-content">
         	<img src="https://drive.google.com/uc?export=view&id=1hvIsm_hwDYJtn-NTJruMTV9lqaTYPR0e " alt="3.png" style="width:30%;">
            <p>Fabricamos sellos tal como los necesites:

			En madera, automáticos, secos. 
				</p>
        </div>  
    </div>
    
    <div class="accordion-container">
        <a href="#" class="accordion-titulo">Promocionales<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <img src="https://drive.google.com/uc?export=view&id=1y7FN-lb4OTwVouPuWigHoEuTFxkVuH7W " alt="3.png" style="width:50%;">
            <p>Lleva tu marca a todos lados con:
				Agendas, Lapiceros, Manillas, Mugs, Cojines.
			</p>
        </div>
    </div>
</div>
    <script >
$(".accordion-titulo").click(function(){
        
   var contenido=$(this).next(".accordion-content");
            
   if(contenido.css("display")=="none"){ //open     
      contenido.slideDown(250);         
      $(this).addClass("open");
   }
   else{ //close        
      contenido.slideUp(250);
      $(this).removeClass("open");  
  }
                            
});
  </script>
<?php        include( "../includes/footer.php");        ?>