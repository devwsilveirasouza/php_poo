<?php
// clone*
// construct*
// invoke
// tostring
// get -
// set -
class Pessoa {
    private $dados = array();

    public function __set($nome, $valor) {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome) { 
        return $this->dados[$nome];
    }
    // Função __tostring 
    public function __tostring() {
        return "Tentei imprimir o objeto.";
    }

}

// Chama a função __set para atribuir valores
$pessoa = new Pessoa();
$pessoa->nome = "Wellington";
$pessoa->idade = 32;
$pessoa->sexo = "M";

// Chama a função __get para pegar valores
echo "<hr>";
echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->sexo."<br>";
echo "<hr>";

// Chama a função tostring
echo $pessoa;
