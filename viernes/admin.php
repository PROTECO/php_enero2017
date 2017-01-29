<?php 
 echo "Ingresar usuario";
echo '<form action="create.php" method="POST">';
    	echo 'id: <input type="text" name="id"><br>';
 	 	echo 'Nombre: <input type="text" name="user" value=""><br>';
 	 	echo 'Clave: <input type="text" name="pass"><br>';
 	 	echo 'Tipo: <input type="text" name="tipo"><br>';

 	 	echo'<input type="submit" name="">';
 	 	
 	 echo '</form>';


 ?>


 	 <form action="resultado.php" method="GET">
 	 	<input type="hidden" name="mostrar_usuarios">
 	 	<input type="submit" value="Muestrame todos los usuarios">

 	 </form>

	

