<?php 
    // Estrutura base de uma classe, atributos, métodos ou ações | 
    class Pessoa {
        // Atributos
        public $nome;
        public $idade;
        // Métodos
        public function Falar(){
            echo $this->nome." de ".$this->idade." acabou de falar.";
        }
    }

    // Instânciando a classe
    $wellington = new Pessoa();
    $wellington->nome = "Pedro";
    $wellington->idade = 32;
    echo "<br>";
    $wellington->Falar();
    echo "<br>";
    
    // var_dump($wellington);







?>