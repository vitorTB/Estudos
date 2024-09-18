<div class="titulo">Atribuições</div>
<?php

$title = 'Atribuições';

$numero = 10;
$numero = $numero - 1;
echo'<br>' . $numero;
$numero = $numero +1.5;
echo'<br>' . $numero;
$numero++;
echo'<br>' . $numero;
$numero--;
echo'<br>' . $numero;
$numero -= 5;
echo'<br>' . $numero;
$numero += 10;
echo'<br>' . $numero;
$numero *=10;
echo'<br>' . $numero;
$numero /=2;
echo'<br>' . $numero;
$numero .=4; //fiz uma concatenação
echo'<br>' . $numero;
$texto = 'Esse é um texto';
echo'<br>' . $texto;
$texto .= ' variavel';
echo'<br>' . $texto;
$texto .= ' String';
echo'<br>' . $texto;

$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;