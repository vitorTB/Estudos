<div class="titulo">Mapa</div>

<?php
$lista = array(1,2,3.4,"texto");
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);


echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>' ;

$lista = array(
  1,
  4 => 2,
  3 => 3,
  'a' => 4,
  5,
  '9'=>6,
  '06' =>7,
  0=>8
);
// Aqui faz a adição das coisas
//[0] 08 [4]2 [3]3 [a]4 [4]5 [9]6 [06]7
print_r ($lista);
