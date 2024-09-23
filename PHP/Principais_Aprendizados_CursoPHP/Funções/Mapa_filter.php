<div class="titulo">Mapa_filter</div>

<?php

$notas = [ 5.8 , 6.3, 8.7,9.8 ,3.7];
$notasfinais=[];
//Quando utilizar uma função nativa do php se coloca entre ''  ou "" e quando for uma função criada pelo desenvolvedor se coloca sem aspas

$notasfinais = array_map('round' , $notas);

print_r($notasfinais);


function aprovados($notas){
        return $notas >= 7;
    }

$apenasAprovados = array_filter($notas, 'aprovados');
echo '<br>';


print_r($apenasAprovados);

function notalegal($nota){
$notafinal = round($nota) + 1;
    return $notafinal>10 ? 10 : $notafinal;
}
$notasfinais = array_map('notalegal' , $notas);
$apenasAprovados = array_filter($notasfinais, 'aprovados');
echo '<br>';
print_r($notasfinais);

echo '<br>';
print_r($apenasAprovados);