<?php
/** Constantes: self e parents */

class Pessoa {

    const nome = "Wellington";

    public function exibirNome() {
        /** Referênciar a constante dentro do escopo da classe 
         * é utilizado o self::nome 
        */
        echo self::nome;
    }
}

class Wellington extends Pessoa {

    const nome = "Silveira";

    public function exibirNome() {
        echo self::nome; // Dentro da classe "Wellington"
        echo "<br>";
        echo parent::nome; // Acessa a super classe "Pessoa"
    }

}

$pessoa = new Pessoa();
$pessoa->exibirNome();

echo "<hr>";

$wellington = new Wellington();
$wellington->exibirNome();