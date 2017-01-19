<?php

    //include 'holamundo.php';
	//requiere

	echo "Hola mundo!\n"."\n";

//hola soy un comentario de linea
/*Hola soy un
comentario de bloque*/


//c. Variables y constantes 
define("PI",     3.1459);

$a=5;
$b=6;

echo PI;

//d. Operadores
	//echo $a." y ".$b;
	echo "<br>";

$a = (false && false);
$b = (true  || true);
$c = (false and false);
$d = (true  or  true);

var_dump($d);


//e. Estructuras de control 
//operadores lógicos 
//if 
//else
//EWOK LINE
//elseif
//while
$i=1;

switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
    default:
       echo "i no es igual a 0, 1 ni 2";
}
//do-while
//for
//switch

//IMC

//requiere--->//se requiere o marca error
//include---->//se incluye si no esta solo un warning


//f. Arreglos    
	//$array = array(1, 2, 3, 4);
	$array = array();
	$array = [1, "dos", 3, 4];
	for ($i=0; $i < count($array) ; $i++) { 
		echo $array[$i]."<br>";
	}

$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];

foreach ($array2 as $valor) {
	    echo $valor."<br>";
	}

$array3 = array(
    "Uno" => "bar",
    2    => 22,
    "Tres" => array(
         	"Cuatro" => "Soy parte del array Tres"
    )
);



//Muestra información sobre una variable
var_dump($array3["Uno"]);
var_dump($array3[2]);
var_dump($array3["Tres"]["Cuatro"]);

echo $array3["Tres"]["Cuatro"];



//

//g. Funciones 
function suma($x,$y){
	return $x+$y;
}

//echo suma(10,15);
//HACER CALCULADORA

//Algoritmos

//1. Bandera
# # # # # #
 # # # # #
# # # # # #
 # # # # #
# # # # # #

//2.FizzBuzz
//Escribe, en el lenguaje de programación que desees, un programa que muestre en pantalla los números del 1 al 100, sustituyendo los múltiplos de 3 por el palabro “Fizz” y, a su vez, los múltiplos de 5 por “Buzz”. Para los guarismos que, al tiempo, son múltiplos de 3 y 5, utiliza el combinado “FizzBuzz”.
//3.Dame x números primos
//4.Factorial
//5. Fibinacci


//POO
 
//maquetar html google

?>