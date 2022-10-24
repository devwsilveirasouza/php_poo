<?php

class Carro {

    public $descricao;
    public $ano;
    public $modelo;
    public $cor;

    public function Ligar(){
        echo "O carro ".$this->modelo." está ligado.<br>";
    }

    public function Desligado(){
        echo "O carro ".$this->modelo." está desligado.<br>";
    }

    public function LigarFarol(){
        echo "Ligando os faróis.<br>";
    }

    public function DesligarFarol(){
        echo "Desligando os faróis.<br>";
    }
}

$carro = new Carro();

$carro->descricao = "Carro bem conservado em ótimo estado";
$carro->ano = 2023;
$carro->modelo = "GOL";
$carro->cor = "Prata";

$carro->Desligado();
echo "<br>";
$carro->DesligarFarol();
echo "<br>";
echo "Este carro do ano ".$carro->ano." é de cor ".$carro->cor.".<br>";



?>