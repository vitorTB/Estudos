<div class="titulo">Visibilidade</div>

<?php

class A{
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "Classe A) Publico = {$this->publico}<br>";
        echo "Classe A) Protegido = {$this->protegido}<br>";
        echo "Classe A) Privado = {$this->privado}<br>";
    }
    //Funçao privada so faz sentido dentro da própria classe se nao ela nao vai ser chamada fora da classe.
    private function  naoMostrar(){
        echo "Não mostrar";
    }
}

class B extends A{
    fu
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar(); 
