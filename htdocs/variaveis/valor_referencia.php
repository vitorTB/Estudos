<div class="titulo">Valor VS Referencia</div>

<?php

/* 
Utilizando a variavel por VALOR a função incrementa não ira fazer alteração no $A ou 
em qualquer variavel soliciante, pois o valor foi passado por cópia.
*/
function incrementaValor($numero){
    $numero++;
}
$a=3;

echo "Valor A sem fazer o incremento: $a";
echo '<br>';
incrementavalor($a);

echo "Variavel passada por valor: $a";
//Numero esta sendo passado por referencia "&" antes da variavel.
function incrementaReferencia(&$numeroR){
    $numeroR++;
}
$b=4;
echo '<br>';
echo "Valor B sem fazer o incremento: $b";
echo '<br>';
incrementaReferencia($b);

echo "Variavel passada por referencia: $b";
