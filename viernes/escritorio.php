<?php 

require('sesion.php');
require('conexion.php');
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
 	<h1>Hola tu nombre es: <?php echo $_SESSION['usuario'];?></h1>


 	<?php 

    if ($_SESSION['tipo']==1) {
 	 header("Location: admin.php");

    	
    }



 	 ?>




 	 <form action="resultado.php" method="GET">
 	 	<input type="hidden" name="mostrar_usuarios">
 	 	<input type="submit" value="Muestrame todos los usuarios">

 	 </form>

 	 







 </body>
 </html>