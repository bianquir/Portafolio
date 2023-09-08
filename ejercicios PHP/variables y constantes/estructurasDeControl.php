<?php



function obtenerAnimalesFavoritos($animales){
    $animalesF=[];
    foreach ($animales as $a){
        if($a== "perro" || $a=="gato" || $a=="conejo"){
            $animalesF[]=$a;
        }
    }
    return var_dump($animalesF);
}




?>