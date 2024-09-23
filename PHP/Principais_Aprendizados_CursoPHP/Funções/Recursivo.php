<div class="titulo">Recursivo</div>

<?php

function recursiva($numero){

    if($numero === 1){
        return 1;
    }
    return $numero +  recursiva($numero - 1);

}

// 5  + 4 + 3 + 2 + 1 = 15

$array = [1,2,[3,4,5],6,[7,[8,9]],10];
function imprimir($array , $nivel = '>'){
    foreach($array as $elemento){
        if(is_array($elemento)){
            imprimir($elemento,$nivel . $nivel[0]);
        }else{
            echo "$nivel $elemento <br>";
        }
    }
}