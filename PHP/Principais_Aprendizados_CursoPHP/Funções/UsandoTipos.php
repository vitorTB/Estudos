<div class="titulo">Usando Tipos</div>

<?php

function soma($a,$b){
    echo "<span>A soma de $a + $b = </span>";
    return $a + $b;
}

echo soma(1.7,2.5). '<br>';
echo soma(5,7). '<br>';
echo soma(2.3,4.5).'<br>';

echo '<hr>';

function soma1(int $a, int $b){
    echo "<span>A soma1 de $a + $b = </span>";
    return $a + $b;
}
echo soma1(1.7,2.5). '<br>';
echo soma1(5,7). '<br>';
echo soma1(2.3,4.5).'<br>';
echo '<hr>';
function soma2($a, $b): int{
    echo "<span>A soma2 de $a + $b = </span>";
    return $a + $b;
}
echo soma2(1.7,2.5). '<br>';
echo soma2(5,7). '<br>';
echo soma2(2.3,4.5).'<br>';