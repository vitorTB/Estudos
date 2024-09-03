<div class="titulo">String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';

var_dump('Eu Também');
echo '<br>';

echo "Nós também" . " somos";
echo '<br>', "também aceito"," vírgula";
//
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . ucfirst('só a primeira palavra');
echo '<br>' . strlen('Quantas letras?');
//echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7,6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); // troca Busca palavra ISSO e troca por AQUILO.