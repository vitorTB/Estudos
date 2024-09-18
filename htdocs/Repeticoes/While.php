<div class="titulo">While e DO While</div>
<?php

const VALOR_LIMITE = 6;
$contador = 1;
while($contador <= VALOR_LIMITE){
    echo "while $contador <br>";
    $contador++;
};
$contador = 1;

do{
    echo "do-while $contador <br>";
    $contador++;

}while($contador < 6);