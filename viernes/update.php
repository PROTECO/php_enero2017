<?php

	require('conexion.php');


	 $id=$_GET["idup"];
 		var_dump($id);
     $consulta=mysqli_query($conexion,"UPDATE `login` SET `username` = 'Luis' WHERE `id` = $id;");

     var_dump($consulta);


 	?>