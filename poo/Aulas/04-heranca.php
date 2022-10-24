<?php
/** Herança é um recurso que permite que classes compartilhem
 * atributos e métodos, códigos ou comportamentos generalizados
 */

 class Veiculo {

    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou.";
    }

    public function Parar() {
        echo "Parou.";
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
 $carro->modelo = "Gol";
 $carro->cor = "Preto";
 $carro->ano = "2020";
 $carro->Andar();
 echo "<br>";
 $carro->LigarLimpador();
 echo "<br>";
 var_dump($carro);

 echo "<br><br>";

 $moto = new Moto();
 $moto->modelo = "CG 125";
 $moto->cor = "Vermelho";
 $moto->ano = "2021";
 $moto->Parar();
 echo "<br>";
 $moto->DarGrau();
 echo "<br>";
 var_dump($moto);