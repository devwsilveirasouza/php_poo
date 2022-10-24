<?php
/** 
 * ------------- MODIFICADORES DE ACESSO -----------------
 *  * public => pode ser acessado dentro da classe e fora
 * protected => só pode ser acessado dentro da classe
 *                  através dos métodos geters e seters
 * private => só é possível acessar dentro do escopo da classe
 */

 class Veiculo {

    protected $modelo; 
    protected $cor;
    protected $ano;

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

 $carro = new Carro();
 $carro->setModelo("PORSCHE");
 echo $carro->getModelo();
 echo "<br>";
//  $carro->setCor("Preto");
//  $carro->setAno("2025");
 $carro->Andar();
 echo "<br>";
 $carro->LigarLimpador();
 echo "<br>";
 var_dump($carro);

 echo "<br><br>";

 $moto = new Moto();
 $moto->setModelo("DUCATI 999");
 echo $moto->getModelo();
//  $moto->cor = "Vermelho";
//  $moto->ano = "2021";
 echo "<br>";
 $moto->Parar();
 echo "<br>";
 $moto->DarGrau();
 echo "<br>";
 var_dump($moto);