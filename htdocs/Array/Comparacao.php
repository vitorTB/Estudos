<div class="titulo">Comparação</div>

<?php
$arr1= ['nome'=> 'Maria', 'idade'=>20];
$arr2= ['nome'=> 'Maria', 'idade'=>20];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);
echo '<br>';
$arr3= ['idade'=>20, 'nome'=>'Maria'];
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);