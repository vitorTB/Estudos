<div class="titulo">Laço for</div>

<?php

for($cont = 1; $cont <= 5; $cont++){
    echo"$cont <br>";
}
for(; $cont <= 10; $cont++){
    echo"$cont <br>";   
}
echo '<hr>';
$array = ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Domingo'];

for($pos = 0; $pos < count($array); $pos++){
    echo"{$array[$pos]} <br>";
}

$matriz = array(
                array(1, 2, 3),
                array(4, 5, 6),
                array(7, 8, 9)
);
echo '<hr>';

//enquanto I for contando o array o J vai contanto o conteudo do array
for($i = 0; $i < count($matriz); $i++){
    for($j = 0; $j < count($matriz[$i]); $j++){   
       if($matriz[$i][$j]== 5){
        echo '$$';
       }else
       echo "{$matriz[$i][$j]}";
    }
echo '<br>';
}
