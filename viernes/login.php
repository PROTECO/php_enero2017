<?php 

require('conexion.php'); //O lo incluye o no funciona nada 
                         //con "include" le da lo mismo si lo incluye o no


$usuario=$_POST['nombre'];
$pass=$_POST['clave'];


echo $usuario."<br>";
echo $pass."<br>";


if (empty($_POST['nombre']) || empty($_POST['clave'])) {
	echo "Te faltaron datos";
	echo "<a href='index.php'>Regresa al login</a>";
	//header("location: index.php");

}else{


	$query=mysqli_query($conexion,"SELECT * FROM login WHERE username='$usuario' and password='$pass'"); //QUERY es una consulta


	

	$existe = $query->num_rows;
	
	if ($existe !=0) {
		$renglon= mysqli_fetch_assoc($query);
		$permiso=$renglon["tipo"];

		session_start(); //PARA QUE SE CREE UNA SESIÓN ( DONDE SE ALMACENAN LOS DATOS DE LA COOKIE)

		
		//UNA VARIABLE DE SESIÓN ES UNA COOKIE QUE SE QUEDA ABIERTA HASTA QUE SE CERRE SESIÓN

		$_SESSION['usuario']=$usuario; //crea una cookie
		$_SESSION['tipo']=$permiso; //crea una cookie

		$hora=time();

		$hora=date("d-m-Y(H:i:s)",$hora);
		$_SESSION['hora']=$hora;
		echo $hora;

		echo"<br>";
		echo"<br>";

		print_r($_SESSION);

		header("Location: escritorio.php");


	}else{
		echo "El usuario no existe";
	}

}
 ?>