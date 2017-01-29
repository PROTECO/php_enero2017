<?php 
require('conexion.php');
echo "<h1>Usuarios</h1>";
echo "<ul>";

$resultado= mysqli_query($conexion,"SELECT * FROM `login`");
 	 	while ($renglon= mysqli_fetch_array($resultado)) {
 	 		echo "<li>";
 	 		echo $renglon['id'];
 	 		echo $renglon['username'];
}			echo "</li>";

echo "</ul>";




  ?>


  <h2>Borrar</h2>
 	 <form action="delete.php" method="GET">
 	 <label>Id</label>
 	 	<input type="text" name="id">
 	 	<input type="submit" value="Enviar">
 	 </form>  

 	 <h2>Actualizar</h2>
 	 <form action="update.php" method="GET">
 	 <label>Id</label>
 	 	<input type="text" name="idup">
 	 	<input type="submit" value="Enviar">
 	 </form>