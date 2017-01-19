<?php 
include 'base.php';

//poo
    class nombreClase {
        //variables
        //metodos
        
        public $nombre="";

        public function imprime()
        {
            echo "yo imprimo";
        }
    }



    $nombreClase = new nombreClase;
    echo $nombreClase->imprime();
    echo $nombreClase->nombre;


    var_dump($baseJson["nombre"]);
    //$nombreClase->nombre="hola";
    $nombreClase->nombre=$baseJson["nombre"];

    echo $nombreClase->nombre;

?>



