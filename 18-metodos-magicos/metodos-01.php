<?php
// clone*
// construct*
// invoke
// tostring
// get -
// set -
class Pessoa {
    private $nome;

    public function __set($nome, $valor) {
        $this->nome = $valor;
    }

    public function __get($nome) { 
        return $this->nome;
    }

}

$pessoa = new Pessoa();
$pessoa->nome = "Wellington";
echo $pessoa->nome."<br>";
