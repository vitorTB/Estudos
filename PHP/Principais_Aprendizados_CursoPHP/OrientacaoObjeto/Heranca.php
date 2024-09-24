<div class="titulo">
    Herança
</div>

<?php

class Pessoa
{

    public $nome;
    public $idade;



    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada<br>";
    }
    function __destruct()
    {
        echo "tchau";
    }
    public function apresentar()
    {
        echo "Olá, {$this->nome} ";
    }
}
class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login)
    {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome,$idade);
        $this->login = $login;
        echo "Novo usuario<br>";
    }

    function __destruct()
    {
        echo "tchau usuario";
    }

    // parent faz pegar o  metodo da classe pai

    public  function apresentar(){
        parent::apresentar();
        echo "<br>login: {$this->login}<br>";
    }

}


$usuario = new Usuario("Maria",24,"mali0092");
$usuario->apresentar();
$pessoa = new Pessoa("Pedro", 20);
$pessoa->apresentar();