<div class="titulo">Interpolação</div>

<?php
//interpolar ( Usar variavel dentro de um texto ).
$numero = 10;

echo $numero;
echo '<br> $numero';
echo "<br> $numero";

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';

echo "<br>Eu tenho 5 $objeto";
echo "<br>Eu tenho 5 {$objeto}s.";// concatena o S 
echo "<br>Eu tenho 5 {$objeto}s mas perdi 3 {$objetos }s."; //espaço sempre depois da chave.
echo '<br>';
