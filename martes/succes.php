<?php 

//echo $_GET["valor"];
//echo $_GET["passwd"];

//$nom=$_GET["valor"];
//$ap=$_GET["passwd"];

//$nom=$_POST["valor"];
//$ap=$_POST["passwd"];


    
    $nombre = isset($_POST["valor"])?$_POST["valor"]:"";
    $passwd = isset($_POST["passwd"])?$_POST["passwd"]:"";
    

    $np=[
        "nombre"=>$nombre,
        "password"=>$passwd
    ];





    if (isset($_POST["valor"]) && isset($_POST["passwd"])) {
        $a = fopen('base.json','a');
        fwrite($a, json_encode($np));
        fclose($a);
    }

//include 'base.php';

 ?>

 <h1>Datos guardados en la base de datos</h1>
<!--
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Hola formularios</title>
 </head>
 <body>
 	<p>Estimado señor <?php //echo $nom." ".$ap ?> <br>
 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ducimus quis minima suscipit. Vero fugiat officiis nemo cum, cumque minus numquam distinctio quidem, praesentium nihil qui ex quibusdam adipisci reprehenderit.</p>
 </body>
 </html>


EJERCICIO DE CALCULAR ALGO-->


