<div class="titulo">Função & Escopo </div>
<?php

    function imprimirMensagens(){
        echo "OLA MUNDO";
    }


    imprimirMensagens();

    function trocaValor(&$numero){
        $numero++;
        echo "Durante: $numero<br>";
    }


$valor = 4;
echo '<br>';
echo "O valor antes: $valor";
echo '<br>';
trocaValor($valor);
echo "O valor depois: $valor";
echo '<br>';
trocaValor($valor);
echo "O valor depois: $valor";
echo '<br>';
function obtemNome($nome){
    return "Bem vindo , {$nome}!";
}

echo '<br>', obtemNome('mario');
echo '<br>', obtemNome('maria');
echo '<br>',obtemNome('jose');

function palindromo(string $nome){
    $trocado = strrev($nome);
    if($nome === $trocado){
        return 'SIM';
    }
  return 'NÃO';
}

echo '<br>', palindromo('ana');
echo '<br>', palindromo('maria');
echo '<br>', palindromo('jose');
echo '<br>', palindromo('alla');
echo '<br>', palindromo('ada');

