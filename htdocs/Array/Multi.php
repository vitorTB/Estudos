<div class="titulo">Multidimensional</div>
<?php
$dados = [
    [
        "nome"=>"Roberto",
        "idade"=>25,
        "naturalidade"=>"São paulo"

    ],
    [
        "nome"=>"maria",
        "idade"=>25,
        "naturalidade"=>"Bahia"
    ]
];

print_r($dados);

$dados [] = [
    "nome"=>"João",
    "idade"=>30,
    "naturalidade"=>"Pernambuco"
];
print_r($dados);
$dados[2]["vizinhos"] = "Novo";
print_r($dados[2]);
//UNSET Não ira fazer com que o array fique ordenado apenas exclui o dados[1]. 
unset($dados[1]);