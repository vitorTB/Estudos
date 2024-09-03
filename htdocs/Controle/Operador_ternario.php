<div class="titulo">Operador Ternário</div>

<?php

$idade = 60;

$status = $idade >=18 ? 'Maior de idade' : 'Menor de idade';

//Operador ternário utilizando o A?B;C;
//seria A pergunta B se for verdade e C se for falso.
echo $status;