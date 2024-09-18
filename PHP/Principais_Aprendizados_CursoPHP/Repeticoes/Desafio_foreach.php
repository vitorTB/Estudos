<div class="titulo">Desafio for each</div>
<!--
Enunciado:
 - imprima apenas os valores do array que contém indice par
 - Desafio adicional: Resolver com for e foreach
 - Valores esperados: AAA, CCC, EEE
-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($valor = 0;$valor < count($array); $valor++ ){
    if($valor % 2 === 0){
        echo"{$array[$valor]} ";
    }

}
echo "<br>";

foreach($array as $chaves =>$valor){
    if($chaves %2 !==0 ) continue;
    echo"$valor ";
}
