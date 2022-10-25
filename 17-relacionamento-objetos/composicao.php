<?php
/** Composição
 * Na composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim,
 * quando ela for destruída, a outra também será
 */
class Pessoa {
    public function atribuiNome($nome) {
        return "O nome da pessoa é ".$nome;
    }
}
class Exibe {
    public $pessoa;
    public $nome;
    // Instânciado a classe pessoa dentro da classe exibe
    function __construct($nome) {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    // Método
    public function exibeNome() {
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Pedro Alvares Cabral");
$exibe->exibeNome();