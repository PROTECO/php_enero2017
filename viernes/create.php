<?php 
require('conexion.php');

 	 $user=$_POST['user'];
 	 $id=$_POST['id'];
 	 $pass=$_POST['pass'];
 	 $tipo=$_POST['tipo'];

 	 $insertar_tupla= mysqli_query($conexion,"INSERT INTO `login` (`id`, `username`, `password`, `tipo`) VALUES (NULL,'$user', '$pass', '$tipo')");


?>

<h1>Insertado en la base</h1>