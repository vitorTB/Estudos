<div class="titulo">Classe</div>


<?php
class Cliente
{
    //Atributos
    public $nome = 'Antonio';
    public $idade = 18;
    //Função
    public function apresentar()
    {
        return "Olá, eu sou o {$this->nome} e tenho {$this->idade} <br>";
    }
}
$c1 = new Cliente();
$c2 = new Cliente();
$c1->nome = 'maria';
echo $c1->apresentar() . '<br>';
echo $c2->apresentar() . '<br>';

class Data
{
    //objetos
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    //funções
    public function apresentarData()
    {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data1 = new  Data();
echo $data1->apresentarData() . '<br>';
$data1->dia = date('d');
$data1->mes = date('m');
$data1->ano = date("Y");
echo $data1->apresentarData() . '<br>';







?>