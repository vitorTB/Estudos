<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];
$dados2 = [
    "naturalidade" => "fortaleza"
];

$dadoscompletos = $dados1 + $dados2;
$dadoscompletoss = array_merge($dados1, $dados2);
print_r($dadoscompletoss);
echo '<br>';
print_r($dadoscompletos);
$indice = array_rand($dadoscompletos);echo '<br>';
echo "$indice = $dadoscompletos[$indice]";
//unset remove elementos
//count conta dados do array
//is_array

$impares = [1,3,5,7,9];
$pares = [2, 4, 6, 8, 10];
$decimais = array_merge($pares,$impares);

//Faz a ordenação dos arrays e faz alteração do array.
sort($decimais);
print_r($decimais);
