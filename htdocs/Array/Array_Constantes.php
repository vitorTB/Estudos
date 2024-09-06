<div class="titulo">Array Constantes</div>
<?php

const FRUTAS = ['laranja','abacaxi'];
const CORES = ['vermelho','azul','verde'];
const NUMEROS = [1, 2, 3, 4, 5];
const PESSOAS = ['Joao','Maria','Pedro'];
echo '<h1>Array Constantes</h1>';
echo 'Frutas: ' . implode(', ', FRUTAS) . '<br>';
echo 'Cores: ' . implode(', ', CORES) . '<br>';
echo 'Numeros: ' . implode(', ', NUMEROS) . '<br>';
echo 'Pessoas: ' . implode(', ', PESSOAS) . '<br>';
echo '<hr>';
echo 'Quantidade de Frutas: ' . count(FRUTAS) . '<br>';
echo 'Quantidade de Cores: ' . count(CORES) . '<br>';
echo 'Quantidade de Numeros: ' . count(NUMEROS).'<br>'; 
echo 'Quantidade de Pessoas:' . count(PESSOAS) . '<br>';
echo 'Primeira Fruta: ' . FRUTAS[0] . '<br>';
echo 'Primeira Cor: ' . CORES[0] . '<br>';