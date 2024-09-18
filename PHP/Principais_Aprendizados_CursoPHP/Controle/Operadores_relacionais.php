<div class="tilu">Operadores Relacionais</div>

<?php

var_dump(1==1);
var_dump(1 > 1);
var_dump(1>=1);
var_dump(4<23);
var_dump(1<=7);
var_dump(1 != 1);
var_dump(1 <> 1);
var_dump(1 != 2);
var_dump(1 <> 4);

var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p>Relacionais no IF/Else</p><hr>";
//-------------------------------------
$idade= 17;

if($idade < 18){
    echo "menor de idade<br>";
}else if($idade <= 65){
    echo "Adulto = $idade anos <br>";
}else{
    echo "Terceiro idade = $idade anos!";
}

 