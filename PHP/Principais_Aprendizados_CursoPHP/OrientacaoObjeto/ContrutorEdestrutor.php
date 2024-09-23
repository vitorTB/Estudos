<div class="titulo">Contrutor e Desconstrutores</div>


<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 10)
    {
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    function __destruct()
    {
        echo "Objeto destruído <br>";
    }
    function apresentar()
    {
        return "Olá meu nome é {$this->nome} e tenho {$this->idade}";
    }
}

// Criando um objeto da classe Pessoa
$pessoa = new Pessoa("Maria", 20);
echo $pessoa->apresentar() . '<br>';
unset($pessoa);
$pessoa = new Pessoa("joao");
echo $pessoa->apresentar() . '<br>';
