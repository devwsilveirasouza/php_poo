<?php
/** Referência e Clonagem de objetos */
class Pessoa {
    public $idade;
    // Clonagem de objetos
    public function __clone() {
        echo "Clonagem de objetos.";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;
// $pessoa2 = $pessoa; // fazer referencia
$pessoa2 = clone $pessoa; // clone de objetos
$pessoa2->idade = 35; // sobreescreveu a variavel

echo "<br>";
echo $pessoa->idade;
echo "<br>";
echo $pessoa2->idade;