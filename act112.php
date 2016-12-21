<?php

    require 'act11.php';
    
//Nuevo objeto
    $dado1= new act11();
    $dado1->setMinNumDado(-8);
    $dado1->setMaxNumDado(16);

//For para realizar las 12 tiradas
    for ($i=0; $i <12 ; $i++){
      echo $dado1->tirarDado();
      echo "<br>";
}

//Imprimir tirada y media
    $dado1->imprimirTiradas();
    $dado1->calcularMediasTiradas();



?>
