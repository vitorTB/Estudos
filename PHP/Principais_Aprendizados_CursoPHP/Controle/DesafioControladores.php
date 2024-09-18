<div class="titulo">Desafio controladores</div>

<!-- 
    Dois trabalhps -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div class="trabalho1" for="t1">Trabalho 01 (terça):</div>
    <select name="t1" id="t1">
        <option value="1">Executado</option>
        <option value="0">Não Executado</option>
    </select>
    <div class="trabalho2" for="t2">Trabalho 02 (Quinta):</div>
    <select name="t2" id="t2">
        <option value="1">Executado</option>
        <option value="0">Não Executado</option>
    </select>
    <button type="submit">Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php

if(isset($_POST['t1'])&&isset($_POST['t2'])){

    $trabalhoTerca = isset($_POST['t1']) ? (bool) $_POST['t1']:false;
    $trabalhoQuinta = isset($_POST['t2']) ? (bool)  $_POST['t2']:false;

//$trabalhoTerca = (bool) $_POST['t2'];
//$trabalhoQuinta = (bool) $_POST['t2'];

// Concatenar duas variaveis $A .= $B OU $A .= 'NOVO TEXTO';

        if( $trabalhoQuinta && $trabalhoTerca){
             echo'Vamos ir ao shopping tomar sorvete e comprar uma TV de 50';
        }elseif($trabalhoQuinta xor $trabalhoTerca){
             echo'Vamos ir ao shopping tomar sorvete e comprar uma TV de 32';
        }else{
             echo'Vamos ficar em casa';
    }
}