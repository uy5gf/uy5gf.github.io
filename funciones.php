<?php

function gen_cartas (){
    $numero=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24];
    $bara=[];
    echo '<br>';
        foreach($numero as $n){
            $carta=['numero'=>$n];
            array_push($bara, $carta);
        }
return $bara;
}

function impr_cartas ($cartas){
    echo '<br>';
    foreach($cartas as $b){
        echo '<img src="./castigos/'.$b['numero'].'.png"/>';
    }    
}

function mezcl_cartas ($cartas){
    echo '<br/>';
    shuffle($cartas);
    return $cartas;
}

function sacarUna ($cartas){
    $contador = 0;
    foreach($cartas as $c){
        if($contador<1) {
            echo '<img style="margin-left: 935px;" src="./castigos/'.$c['numero'].'.png"/>';
        }
        $contador++;
    } 
}

?>