<div class="titulo">For each</div>

<?php

$array = [
        1=> 'domingo',
        'segunda',
        'terca',
        'quarta',
        'quinta',
        'sexta',
        'sabado'
];

foreach ($array as $valor){
echo "$valor <br>";
}
foreach($array as $indice => $valor){
    echo "$indice => $valor <br>";
}

$matriz = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

foreach ($matriz as $linha){
    //echo implode(", ", $linha );
    //echo "<br>";
    foreach($linha as $valor){
        echo $valor . " ";

    }
    echo "<br>";
}


$numeros = [1,2,3,4,5];

foreach ($numeros as &$dobrar){
    $dobrar *=2;
    echo "$dobrar <br>";
}
print_r($numeros);
echo "<br>";

foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 5) break;
    //%2===0 é "IMPAR"  %2===1 é "PAR"
    if($valor % 2 === 1)continue;
    echo "$valor <br>";
}
echo "FIM!";