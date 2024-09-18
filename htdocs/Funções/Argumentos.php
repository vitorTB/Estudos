<div class="titulo">Argumentos variaveis</div>

<?php

    function soma( ... $numeros){
       $soma=0;
       foreach($numeros as $num){
        $soma += $num;
    }
    return  "A soma $soma";
}

    echo soma(10,10,10);
    echo '<br>';
    soma(1);



  

