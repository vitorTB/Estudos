<div class="titulo">Recursivo</div>

<?php

function recursiva($numero){

    if($numero === 1){
        return 1;
    }
    return $numero +  recursiva($numero - 1);

}