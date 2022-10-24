<?php
/** 
 * ------------- MODIFICADORES DE ACESSO -----------------
 *  * public => pode ser acessado dentro da classe e fora
 * protected => só pode ser acessado dentro da classe
 *                  através dos métodos geters e seters
 * private => só é possível acessar dentro do escopo da classe
 */

 class Veiculo {

    private $modelo; 
    private $cor;
    private $ano;

    public function Andar() {
        echo "Andou.";
    }

    public function Parar() {
        echo "Parou.";
    }   
    
    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setAno($a) {
        $this->ano = $a;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setCor($c) {
        $this->cor = $c;
    }

    public function getCor() {
        return $this->cor;
    }

 }

 class Carro extends Veiculo {

    public function LigarLimpador() {
        echo "Limpando em 3 2 1...";
    }
   
 }

 class Moto extends Veiculo {

    public function DarGrau() {
        echo "Dando grau em 3 2 1...";
    }
 }

 $carro = new Veiculo();
 $carro->setModelo("MCLAREN");
 $carro->setAno("2022");
 $carro->setCor("brownie");
 echo "<br>";
 echo $carro->getModelo();
 echo "<br>";
 echo $carro->getAno();
 echo "<br>";
 echo $carro->getCor();
 echo "<br>";
 var_dump($carro);


 